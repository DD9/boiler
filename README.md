# boiler
Boilerplate Theme

----
Draft Instructions

--

#Install Boiler

--

##As a solo repo

Create a WordPress install (probably local)

Create a theme folder (i.e /wp-content/themes/themename/), navigate to that folder, and pull down the repo

```
git clone git@github.com:dd9/boiler.git .
```

--

##Using Submodules

http://git-scm.com/book/en/v2/Git-Tools-Submodules

From superproject root: 

```
git submodule add https://github.com/DD9/boiler wp-content/themes/themename
```

--

##Using Subtrees (bidirectional workflow)

https://medium.com/@v/git-subtrees-a-tutorial-6ff568381844

From superproject root: 

```
git remote add boiler git@github.com:dd9/boiler.git

git subtree add --prefix=wp-content/themes/[THEMENAME] boiler master
```

*(This will create the theme directory for you.  TGD note: consider squashing this step next time)*

To pull down upstream changes

```
git subtree pull --prefix=wp-content/themes/[THEMENAME] --squash boiler master

```

*(TGD note: squashing not working, this seems to be pullingin commit history, which makes sense if we want to push, but not necissarly otherwise)*

To push changes back to boiler theme from within a different superproject root:

```
git subtree push --prefix=wp-content/themes/[THEMENAME] boiler master
```
*(Pushes to master branch, will work for DD9 team authorized to deploy here)*

---

##Using Subtrees (unidirectional workflow)

https://help.github.com/articles/about-git-subtree-merges/

http://williamdodson.co/articles/git-subtree/

```
git remote add -f boiler git@github.com:dd9/boiler.git

git merge --squash -s ours --no-commit boiler/master

git read-tree --prefix=wp-content/themes/[THEMENAME] -u boiler/master

git commit -m "Merge boiler as subtree"

# Then to update the external subtree repo:
git pull -s subtree boiler master 
# TGD this brought in all the commits from the entire subtree history, try squashing or something else next time

```




---

#Compile Boiler

Configure LESS compiler to target these files in /library/css

```
ie.css
login.css
style.css
```


*(We may end up removing these files because they should be generated on the theme level, not inherited from the parent repo)*




