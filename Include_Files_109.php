<?php 
/*
The include (or require) statement takes all the text/code/markup that exists in the specified file and copies it 
into the file that uses the include statement.

Including files is very useful when you want to include the same PHP, HTML, or text on multiple pages of a website.

PHP include and require Statements
It is possible to insert the content of one PHP file into another PHP file (before the server executes it), 
with the include or require statement.

The include and require statements are identical, except upon failure:

require will produce a fatal error (E_COMPILE_ERROR) and stop the script
include will only produce a warning (E_WARNING) and the script will continue
So, if you want the execution to go on and show users the output, even if the include file is missing, use the include statement. 
Otherwise, in case of FrameWork, CMS, or a complex PHP application coding, 
always use the require statement to include a key file to the flow of execution. 
This will help avoid compromising your application's security and integrity, just in-case one key file is accidentally missing.

Including files saves a lot of work. 
This means that you can create a standard header, footer, or menu file for all your web pages.
 Then, when the header needs to be updated, you can only update the header include file.

Syntax
include 'filename';

or

require 'filename';
*/

?>