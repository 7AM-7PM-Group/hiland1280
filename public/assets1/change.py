import os
import random
import string

def random_alphanumeric(length=10):
    """Generate a random alphanumeric string of given length."""
    return ''.join(random.choices(string.ascii_letters + string.digits, k=length))

def rename_images_to_random(folder_path):
    """Rename all image files in the folder and subfolders to random alphanumeric names."""
    if not os.path.exists(folder_path):
        print(f"Folder {folder_path} does not exist.")
        return

    for root, dirs, files in os.walk(folder_path):
        for filename in files:
            if filename.lower().endswith(('.png', '.jpg', '.jpeg', '.gif', '.bmp', '.webp')):
                name, ext = os.path.splitext(filename)
                new_name = random_alphanumeric() + ext
                old_path = os.path.join(root, filename)
                new_path = os.path.join(root, new_name)
                os.rename(old_path, new_path)
                print(f'Renamed {os.path.join(root, filename)} to {os.path.join(root, new_name)}')
# Usage
folder = '.'  # Current directory, assuming assets folder
rename_images_to_random(folder)
