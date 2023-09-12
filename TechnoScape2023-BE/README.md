# Technoscape 2023

TechnoScape adalah event terbesar yang diselenggarakan oleh Bina Nusantara Computer Club (BNCC) sebagai wadah untuk memberdayakan pengetahuan  teknologi dan menghasilkan karya inovatif. TechnoScape telah hadir sejak tahun 2018 sampai sekarang

## Entity Relationship Diagram
![Entity Relationship Diagram1](https://user-images.githubusercontent.com/90307879/223383363-0e9767e4-c36a-42b7-9d8c-ce2201c58054.jpg)

## First Setup 

Step to develop code from your computer:
1. open terminal

2. git clone https://github.com/RnDBNCC/TechnoScape2023-BE.git (in your terminal)

3. don't forget to add env file setup on your project

4. npm run install:env (in your terminal) -> make sure your node version is 14.21.0

![image](https://user-images.githubusercontent.com/90315898/212232429-a09cd204-bc03-4f5a-b20f-a4faedf92571.png)

after vite was build like this don't close this terminal

5. add your new terminal for "php artisan serve"

Your application is ready to serve, and if you want to start again just make sure u had two different terminal
first terminal for "npm run build"
second terminal for php artisan serve

## Semantic and Standarization

**Folder Structure**
```css
docs
\_ another-docs.md
\_ some-image.png
assets
\_ 3d
   \_ rocket.glb
\_ sponsor
   \_ netsky_512.png
   \_ carbon_64.webp
\_ medpar
\_ medsos
   \_ facebook.svg
   \_ instagram.svg
\_ navigation
   \_ home.svg
   \_ back.svg
   \_ key.svg
\_ hackathon
   \_ trophy_1.svg
   \_ trophy_2.svg
css
\_ base
   \_ base.css
   \_ slider.css
   \_ button.css
\_ home.css
\_ user-dashboard.css
\_ virtual-converence.css
js
\_ base
   \_ form-validation.js
   \_ slider.js
\_ home.js
\_ register.js
index.html
login.html
register.html
```

**Semantic Branching**
```bash
# format
<type>/<feature-title>/<sub-title>/<feature-number>/<date>

# example
main
stable/2021-12-24
development
experiment/2021-12-24

feature/register
hotfix/register/password-validation

page/home
section/home/about-us
```

`<type>`: main, test, stable, release, experimental, hotfix, bugfix, feature, page, section

**Semantic Committing & Merging**

```bash
# format
[<status>](<scope>) <section-name|page-name>: <changes description>
[<status>] <section-name|page-name>: <changes description>
<status|scope>: <changes description>

# example
[add](feat) about-us in home: put assets and give styling to about us
feat: put assets and give styling to about us
[fix] register: fix password validation logic 
```

`<status>`: init, add, patch, enable, disable, fix, bugfix, hotfix refactor, remove, merge. \
`<scope>` : test, doc, conflict, feat, section, mixed \
`<scope>` (FE): api, page, section, style, asset, util, logic, etc. \

**Form Standarization**

Remember to encapsulate every div/element which has input that would send data to backend using `<form>` tag. Please use `<button>` instead `<div>` if it wants to interact with backend.

```html
<form id="register" action="" method="POST" enctype="application/x-www-form-urlencoded">
    <input type="text" name="table_colomn_name"
                       value="input name is same as colomn name in database">
    <button type="submit">Register</button>
</form>
```

**HTML Structure Standarization**
- Screen Size Responsiveness
- use kebab-case for naming id and class of CSS.
- use kebab-case for form field `input[name="confirm-password"]`.
- use camelCase for JS variabel and function.
- use snake_case for JS serializer and props modifier.
- use PascalCase for JS class.

**Etc. Standarization**
- You MUST USE Spaces 4 as indentation
- DO NOT USE tab or anything else than 4 as indentation.

## Notes
- don't hesitate to change this readme as long as you need it
- if you use modules aren't listed above, add the list by yourself. You could ask Project Manager if you need any help
- Semantic and standarization is recommended to make us easier to track changes and fix everything up. We would be really gratefull if you did it.
- Along time ago, Chrome works well in everything. Yep E V E R Y T H I N G. As a result, it messing another browser. For example, look up about glassmorphism in Chrome and Firefox, and you would see how chrome mess in everything. So here what I suggest... Check in every browser's render engine you could use
    - Chromium: Chrome, Edge
    - Gecko: Firefox, Tor Browser
    - Webkit: Safari
    - Internet Explorer (nope), Edge legacy (well... try it)
    - Opera, Brave, etc.
    - We like to suggest just Chrome and Firefox if you mind that much.
- Dealing with Git Merge Conflict? Fix it by yourself. Solving this would help your future self. Prove me.
- I have a suprise for you all if you could make me suprised too... <br /> *Clue: key to legacy.*

## GOODLUCK GUYS
## Nothing is Impossible
