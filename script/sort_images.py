#!/usr/bin/env python3
"""
Image sorting script - organizes images into categorized folders
Uses a simple approach with optional AI-based classification
"""

import os
import shutil
from pathlib import Path
from collections import defaultdict

# Configuration
SOURCE_DIR = r"C:\Users\MSI 1\.openclaw\workspace\IMGS"
CATEGORIES = {
    "animals": ["animal", "dog", "cat", "bird", "fish", "lion", "tiger", "elephant", "horse", "pet"],
    "mountains": ["mountain", "hill", "peak", "landscape", "nature", "scenic", "valley"],
    "cars": ["car", "vehicle", "automobile", "truck", "sedan", "suv", "automotive"],
    "bikes": ["bike", "bicycle", "motorcycle", "motorbike", "cycling", "cycle"],
    "people": ["person", "people", "human", "face", "portrait", "man", "woman", "child"],
    "brown_objects": ["brown", "wood", "wooden", "chocolate", "coffee", "leather", "rust"]
}

def get_image_files(directory):
    """Get all image files from directory"""
    image_extensions = {'.jpg', '.jpeg', '.png', '.gif', '.bmp', '.webp', '.tiff', '.tif'}
    image_files = []
    
    for file in Path(directory).iterdir():
        if file.is_file() and file.suffix.lower() in image_extensions:
            image_files.append(file)
    
    return image_files

def categorize_by_filename(filename):
    """Categorize based on filename keywords"""
    lower_name = filename.lower()
    matches = []
    
    for category, keywords in CATEGORIES.items():
        for keyword in keywords:
            if keyword in lower_name:
                matches.append(category)
                break
    
    return matches if matches else ["uncategorized"]

def create_category_folders(base_dir):
    """Create category folders"""
    for category in list(CATEGORIES.keys()) + ["uncategorized"]:
        folder_path = Path(base_dir) / category
        folder_path.mkdir(exist_ok=True)
        print(f"Created/verified folder: {folder_path}")

def sort_images():
    """Main sorting function"""
    source = Path(SOURCE_DIR)
    
    if not source.exists():
        print(f"Error: Source directory '{SOURCE_DIR}' does not exist!")
        return
    
    print(f"Sorting images from: {source}")
    print("-" * 50)
    
    # Create category folders
    create_category_folders(source)
    
    # Get all images
    images = get_image_files(source)
    print(f"Found {len(images)} image(s)")
    print("-" * 50)
    
    # Track statistics
    stats = defaultdict(int)
    
    # Sort each image
    for img_path in images:
        categories = categorize_by_filename(img_path.name)
        
        # Copy to each matching category
        for category in categories:
            dest_folder = source / category
            dest_path = dest_folder / img_path.name
            
            # Handle duplicates
            counter = 1
            original_dest = dest_path
            while dest_path.exists():
                stem = original_dest.stem
                suffix = original_dest.suffix
                dest_path = dest_folder / f"{stem}_{counter}{suffix}"
                counter += 1
            
            shutil.copy2(img_path, dest_path)
            stats[category] += 1
            print(f"Copied: {img_path.name} -> {category}/")
    
    print("-" * 50)
    print("Sorting complete!")
    print("\nSummary:")
    for category, count in sorted(stats.items()):
        print(f"  {category}: {count} file(s)")

    print("\nNote: Files were COPIED to category folders.")
    print("Original files remain in the root directory.")
    print("Review the sorted folders and manually move if needed.")

if __name__ == "__main__":
    sort_images()
