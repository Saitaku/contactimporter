Contact Importer
===============

UNFINISHED as of 8-13-13

Facilitates the import of contacts from a text file generated from scanned images of contact information 
(via Tesseract) to a database. This program is meant to be used to parse specific text files that came 
from scans parsed to text via the Tesseract program. It may work for other text files that store contacts
with some tweaking.

The repository is missing folders for the files because I have .gitignored all text files to protect user 
data. To build the folders out create a 'files' folder in the root directory and a folder for each letter 
of the alphabet inside of it. Place the text files in these folders.

I separated the folders alphabetically because I am importing thousands of contacts that have been printed
into alphabetical sections. If it doesn't suit your needs, tweak the $folders array in the 
processor.class.php file.

If you have any questions feel free to contact me:

Scott Metcalf:
scott at bluenailmedia dot com

