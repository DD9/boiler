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

Using Subtrees

https://medium.com/@v/git-subtrees-a-tutorial-6ff568381844

From superproject root: 

git remote add boiler git@github.com:dd9/boiler.git

git subtree add --prefix=wp-content/themes/themename/ boiler master

To pull down upstream changes

git subtree pull --prefix=wp-content/themes/themename/ --squash boiler master

