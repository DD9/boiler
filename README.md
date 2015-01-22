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

##Using Subtrees

https://medium.com/@v/git-subtrees-a-tutorial-6ff568381844

From superproject root: 

```
git remote add boiler git@github.com:dd9/boiler.git

git subtree add --prefix=wp-content/themes/themename boiler master
```

To pull down upstream changes

```
git subtree pull --prefix=wp-content/themes/themename --squash boiler master
```

To push changes back to boiler theme from within a different superproject root:

```
git subtree push --prefix=wp-content/themes/themename boiler master
```
*(Pushes to master branch, will work for DD9 team authorized to deploy here)*

---

#Compile Boiler

Configure LESS compiler to target these files in /library/css

```
ie.css
login.css
style.css
```


*(We may end up removing these files because they should be generated on the theme level, not inherited from the parent repo)*




