Opening and Closing Files

r : Opens the file for reading only.
Places the file pointer at the beginning of the file.

r++ : Opens the file for reading and writing.
Places the file pointer at the beginning of the file.

w : Opens the file for writing only.
Places the file pointer at the beginning of the file.
and truncates the file to zero length. If the file does not
exist, then it attempts to create a file.

w+ : Opens the file for reading and writing only.
Places the file pointer at the beginning of the file.
and truncates the file to zero length. If the file does not
exist, then it attempts to create a file.

a : Opens the file for writing only.
Places the file pointer at the end of the file.
If the file does not exist, then it attempts to create a file.

a+ : Opens the file for reading and writing only.
Places the file pointer at the end of the file.
If the file does not exist, then it attempts to create a file