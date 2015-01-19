# boiler
Boilerplate Theme

----
Draft Instructions

--


Using Submodules

http://git-scm.com/book/en/v2/Git-Tools-Submodules

From superproject root: 

git submodule add https://github.com/DD9/boiler wp-content/themes/themename

--

Notes:

From the theme folder (wp-content/themes/) in an existing repo

git submodule add https://github.com/DD9/boiler

or perhaps

Create the theme folder (wp-content/themes/boiler) and navigate to it

git submodule add git@github.com:DD9/boiler.git .

git submodule init

git submodule update 


--

or perhaps, from the repo root

git submodule add git@github.com:DD9/boiler.git wp-content/themes/boilerdemo
