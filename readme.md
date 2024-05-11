
![Laravel Hashnode](https://github.com/dcblogdev/laravel-hashnode/assets/1018170/e52fb7f5-8996-4501-9f60-080bae96b9aa)

[![Latest Version on Packagist](https://img.shields.io/packagist/v/dcblogdev/laravel-hashnode.svg?style=flat-square)](https://packagist.org/packages/dcblogdev/laravel-hashnode)
[![Total Downloads](https://img.shields.io/packagist/dt/dcblogdev/laravel-hashnode.svg?style=flat-square)](https://packagist.org/packages/dcblogdev/laravel-hashnode)

Laravel package for working with the Hashnode API

Hashnode API documentation can be found at:
https://apidocs.hashnode.com/

# Install

You can install the package via composer:

```
composer require dcblogdev/laravel-hashnode
```

# Config

You can publish the config file with:

```
php artisan vendor:publish --provider="Dcblogdev\Hashnode\HashnodeServiceProvider" --tag="config"
```

# .ENV Configuration

Ensure you've set the following in your .env file:

```
HASHNODE_HOST=
HASHNODE_PER_PAGE=19
```

The host is either a domain when using headless or the hashnode subdomain.

Hashnode's API supports paging, you can set the number of items per page using the `HASHNODE_PER_PAGE` variable. To a maximum of **20**.

# Usage

Import the facade at the top of the file:

```php
use Dcblogdev\Hashnode\Facades\Hashnode;
```

## Get Publication

```php
Hashnode::publication()
```

Example Response

```php

  "id": "5c8a3f8a602e12c87a714246",
  "title": "DC Blog",
  "displayTitle": "DC Blog - a Laravel Blog",
  "descriptionSEO": "A Laravel and PHP Blog talking about Laravel, Livewire, AlpineJs and related stacks.",
  "isTeam": false,
  "isHeadless": true,
  "followersCount": null,
  "url": "https://dcblog.dev",
  "canonicalURL": "https://dcblog.dev",
  "favicon": "https://cdn.hashnode.com/res/hashnode/image/upload/v1553188595140/E8fp3KO0r.png",
  "headerColor": "#5144CC",
  "metaTags": "",
  "about": {
    "html": "<p>Checkout my Laravel TALL stack theme &lt;a href='https://laraveladmintw.com'&gt;laraveladmintw.com&lt;/a&gt;</p>\n",
    "markdown": "Checkout my Laravel TALL stack theme <a href='https://laraveladmintw.com'>laraveladmintw.com</a>",
    "text": "Checkout my Laravel TALL stack theme <a href='https://laraveladmintw.com'>laraveladmintw.com</a>\n"
  },
  "author": {
    "id": "57052b54115103c3b0977f63",
    "name": "David Carr",
    "username": "dcblogdev",
    "bio": {
      "html": "<p>Blogger at http://dcblog.dev. Senior Full Stack Engineer at Vivedia</p>\n",
      "markdown": "Blogger at http://dcblog.dev. Senior Full Stack Engineer at Vivedia",
      "text": "Blogger at http://dcblog.dev. Senior Full Stack Engineer at Vivedia\n"
    },
    "profilePicture": "https://cdn.hashnode.com/res/hashnode/image/upload/v1553188817552/Ttjno27W7.png",
    "socialMediaLinks": {
      "website": "https://dcblog.dev",
      "github": "https://github.com/dcblogdev",
      "twitter": "https://twitter.com/dcblogdev",
      "instagram": "",
      "facebook": "",
      "stackoverflow": "",
      "linkedin": "https://www.linkedin.com/in/daveismyname/",
      "youtube": "https://www.youtube.com/c/DCBlogdev"
    },
    "badges": [
      {
        "id": "63b76f1c4f7da571a622758f",
        "name": "Crazy Blogger",
        "description": "Wrote a blog post every day for 7 days",
        "image": "https://cdn.hashnode.com/res/hashnode/image/upload/v1696319717434/3NY4Dyu1p.png?auto=compress",
        "dateAssigned": "2023-01-06T00:45:16.768Z",
        "infoURL": null,
        "suppressed": null
      },
      {
        "id": "5fbe4e9d1b2aff20d3f0ab6a",
        "name": "Word Warrior",
        "description": "Wrote an in-depth blog post with more than 2K words",
        "image": "https://cdn.hashnode.com/res/hashnode/image/upload/v1696319757778/s7nOYDsve.png?auto=compress",
        "dateAssigned": "2020-11-25T10:50:28.230Z",
        "infoURL": null,
        "suppressed": true
      },
      {
        "id": "5fbe4e9d1b2aff20d3f0ab69",
        "name": "Self Starter",
        "description": "Wrote a blog post after joining Hashnode",
        "image": "https://cdn.hashnode.com/res/hashnode/image/upload/v1696319802391/hvWFt1_AU.png?auto=compress",
        "dateAssigned": "2020-11-25T10:50:28.230Z",
        "infoURL": null,
        "suppressed": true
      }
    ],
    "followersCount": 314,
    "followingsCount": 101,
    "tagline": "Web developer",
    "dateJoined": "2016-04-06T15:29:24.241Z",
    "location": "United Kingdom",
    "availableFor": "Freelance content creation\n",
    "tagsFollowing": [
      {
        "id": "56744721958ef13879b94b91",
        "name": "CSS",
        "slug": "css",
        "logo": "https://cdn.hashnode.com/res/hashnode/image/upload/v1513316949083/By6UMkbfG.png",
        "tagline": "A style sheet language used for describing the presentation of a document written in a markup language.",
        "info": {
          "html": "<p>Cascading Style Sheets (CSS) is a stylesheet language used to describe the presentation of a document written in HTML. CSS describes how elements should be rendered on screen, on paper, in speech, or on other media. <a target='_blank' rel='noopener noreferrer'  href=\"https://developer.mozilla.org/en-US/docs/Web/CSS\">MDN</a></p>\n",
          "markdown": "Cascading Style Sheets (CSS) is a stylesheet language used to describe the presentation of a document written in HTML. CSS describes how elements should be rendered on screen, on paper, in speech, or on other media. [MDN](https://developer.mozilla.org/en-US/docs/Web/CSS)",
          "text": "Cascading Style Sheets (CSS) is a stylesheet language used to describe the presentation of a document written in HTML. CSS describes how elements should be rendered on screen, on paper, in speech, or on other media. MDN\n"
        },
        "followersCount": 171643,
        "postsCount": 10690
      },
      {
        "id": "56744722958ef13879b94fd9",
        "name": "PHP",
        "slug": "php",
        "logo": "https://cdn.hashnode.com/res/hashnode/image/upload/v1513177307594/rJ4Jba0-G.png",
        "tagline": "PHP is a server-side scripting language designed for web development but also used as a general-purpose programming language. Originally created by Rasmus Lerdorf in 1994, the PHP reference implementation is now produced by The PHP Group.",
        "info": {
          "html": "<p>PHP is a server-side scripting language designed for web development but also used as a general-purpose programming language. Originally created by Rasmus Lerdorf in 1994, the PHP reference implementation is now produced by The PHP Group.</p>\n",
          "markdown": "PHP is a server-side scripting language designed for web development but also used as a general-purpose programming language. Originally created by Rasmus Lerdorf in 1994, the PHP reference implementation is now produced by The PHP Group.",
          "text": "PHP is a server-side scripting language designed for web development but also used as a general-purpose programming language. Originally created by Rasmus Lerdorf in 1994, the PHP reference implementation is now produced by The PHP Group.\n"
        },
        "followersCount": 87548,
        "postsCount": 3978
      },
      {
        "id": "56744723958ef13879b9526c",
        "name": "Git",
        "slug": "git",
        "logo": "https://res.cloudinary.com/hashnode/image/upload/v1473706112/l2hom2y5xxpgwlgg0sz0.jpg",
        "tagline": "Git is a version control system for tracking changes in computer files and coordinating work on those files among multiple people",
        "info": {
          "html": "<p>Git is a widely used version control system for software development. It is a distributed revision control system with an emphasis on speed, data integrity, and support for distributed, non-linear workflows.</p>\n",
          "markdown": "Git is a widely used version control system for software development. It is a distributed revision control system with an emphasis on speed, data integrity, and support for distributed, non-linear workflows.",
          "text": "Git is a widely used version control system for software development. It is a distributed revision control system with an emphasis on speed, data integrity, and support for distributed, non-linear workflows.\n"
        },
        "followersCount": 23672,
        "postsCount": 5719
      },
      {
        "id": "56744721958ef13879b94c63",
        "name": "GitHub",
        "slug": "github",
        "logo": "https://cdn.hashnode.com/res/hashnode/image/upload/v1513321555902/BkhLElZMG.png",
        "tagline": "GitHub is a development platform inspired by the way you work. From open source to business, you can host and review code, manage projects, and build software alongside millions of other developers.",
        "info": {
          "html": "<p>GitHub is a Web-based Git repository hosting service. It offers all of the distributed revision control and source code management (SCM) functionality of Git as well as adding its own features. <a target='_blank'  href=\"https://en.wikipedia.org/wiki/GitHub\">GitHub</a></p>\n",
          "markdown": "GitHub is a Web-based Git repository hosting service. It offers all of the distributed revision control and source code management (SCM) functionality of Git as well as adding its own features. [GitHub](https://en.wikipedia.org/wiki/GitHub)",
          "text": "GitHub is a Web-based Git repository hosting service. It offers all of the distributed revision control and source code management (SCM) functionality of Git as well as adding its own features. GitHub\n"
        },
        "followersCount": 189468,
        "postsCount": 7986
      },
      {
        "id": "56744723958ef13879b95216",
        "name": "Sublime Text",
        "slug": "sublime-text",
        "logo": "https://res.cloudinary.com/hashnode/image/upload/v1497046439/xny5lu0xfjzpfybrrl9c.png",
        "tagline": "Sublime Text is a proprietary cross-platform source code editor with a Python application programming interface.",
        "info": {
          "html": "<p>Sublime Text is a lightweight text editor for code and markup. It&#39;s free and has a sleak user interface. Features like Distraction Free Mode, Instant Project Switch, Split Editing etc make it one of the best editors for developers. <a target='_blank' rel='noopener noreferrer'  href=\"http://www.sublimetext.com\">SublimeText.com</a></p>\n",
          "markdown": "Sublime Text is a lightweight text editor for code and markup. It's free and has a sleak user interface. Features like Distraction Free Mode, Instant Project Switch, Split Editing etc make it one of the best editors for developers. [SublimeText.com](http://www.sublimetext.com)",
          "text": "Sublime Text is a lightweight text editor for code and markup. It's free and has a sleak user interface. Features like Distraction Free Mode, Instant Project Switch, Split Editing etc make it one of the best editors for developers. SublimeText.com\n"
        },
        "followersCount": 2658,
        "postsCount": 77
      },
      {
        "id": "56744721958ef13879b94a83",
        "name": "Laravel",
        "slug": "laravel",
        "logo": "https://res.cloudinary.com/hashnode/image/upload/v1454754733/exjubzyuvwz0pvvpxxwv.jpg",
        "tagline": "Laravel is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller architectural pattern",
        "info": {
          "html": "<p>Laravel is a free, open-source PHP web application framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller (MVC) architectural pattern. Some of the features of Laravel are a modular packaging system with a dedicated dependency manager, different ways for accessing relational databases, utilities that aid in application deployment and maintenance, and its orientation toward syntactic sugar. <a href=\"https://en.wikipedia.org/wiki/Laravel\">Wikipedia</a></p>\n",
          "markdown": "Laravel is a free, open-source PHP web application framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller (MVC) architectural pattern. Some of the features of Laravel are a modular packaging system with a dedicated dependency manager, different ways for accessing relational databases, utilities that aid in application deployment and maintenance, and its orientation toward syntactic sugar. [Wikipedia](https://en.wikipedia.org/wiki/Laravel)",
          "text": "Laravel is a free, open-source PHP web application framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller (MVC) architectural pattern. Some of the features of Laravel are a modular packaging system with a dedicated dependency manager, different ways for accessing relational databases, utilities that aid in application deployment and maintenance, and its orientation toward syntactic sugar. Wikipedia\n"
        },
        "followersCount": 16865,
        "postsCount": 2413
      }
    ],
    "deactivated": false,
    "following": false,
    "followsBack": false,
    "isPro": false
  },
  "integrations": {
    "fbPixelID": "",
    "fathomSiteID": "HIPVVMAQ",
    "fathomCustomDomainEnabled": false,
    "fathomCustomDomain": "",
    "hotjarSiteID": "",
    "matomoSiteID": null,
    "matomoURL": "",
    "gaTrackingID": "G-8H8RXS1VSF",
    "plausibleAnalyticsEnabled": false,
    "wmPaymentPointer": "",
    "umamiWebsiteUUID": "364fc947-9cce-4d4c-abee-215a6dfe3ebb",
    "umamiShareId": "A83DDfBE",
    "gTagManagerID": null
  },
  "preferences": {
    "logo": "",
    "darkMode": {
      "enabled": true,
      "logo": null
    },
    "enabledPages": {
      "badges": true,
      "newsletter": true,
      "members": null
    },
    "navbarItems": [
      {
        "id": "604632b1d0457f4d5c583333",
        "label": "About Me",
        "url": "https://dcblog.dev/about-me",
        "type": "page",
        "series": null,
        "page": {
          "id": "5eb3fa91651a1647038428e9",
          "title": "About Me",
          "slug": "about-me",
          "content": {
            "html": "<p>Since 2006, I've been developing applications for the web using mostly PHP. I love what I do as every day there is something new and exciting to learn.</p>\n<p>I spend a lot of time learning new techniques and actively helping other people learn web development through a variety of help groups and writing web development tutorials for my website and blog about advancements in web design and development.</p>\n<p>In my spare time, the web development community is a big part of my life. Whether teaching code to kids at a local school, managing online programming groups and blogs or attending a conference, I find keeping involved helps me stay up to date.</p>\n<p>This is also my chance to give back to the community that helped me get started, a place I am proud to be part of.</p>\n<p>I love to use the TALL stack (Tailwind CSS, Alpine.js, Laravel, and Laravel Livewire)</p>\n<p>I enjoy writing tutorials and working on Open Source packages.</p>\n<p>I also write <a target=\"_blank\" href=\"https://dcblog.dev/series/books\">books</a>. My latest book is <a target=\"_blank\" href=\"https://modularlaravel.com/\">Modular: The Laravel way</a>, which teaches how to work with Laravel Modules.</p>\n",
            "markdown": "Since 2006, I've been developing applications for the web using mostly PHP. I love what I do as every day there is something new and exciting to learn.\n\nI spend a lot of time learning new techniques and actively helping other people learn web development through a variety of help groups and writing web development tutorials for my website and blog about advancements in web design and development.\n\nIn my spare time, the web development community is a big part of my life. Whether teaching code to kids at a local school, managing online programming groups and blogs or attending a conference, I find keeping involved helps me stay up to date.\n\nThis is also my chance to give back to the community that helped me get started, a place I am proud to be part of.\n\nI love to use the TALL stack (Tailwind CSS, Alpine.js, Laravel, and Laravel Livewire)\n\nI enjoy writing tutorials and working on Open Source packages.\n\nI also write [books](https://dcblog.dev/series/books). My latest book is [Modular: The Laravel way](https://modularlaravel.com/), which teaches how to work with Laravel Modules.",
            "text": "Since 2006, I've been developing applications for the web using mostly PHP. I love what I do as every day there is something new and exciting to learn.\nI spend a lot of time learning new techniques and actively helping other people learn web development through a variety of help groups and writing web development tutorials for my website and blog about advancements in web design and development.\nIn my spare time, the web development community is a big part of my life. Whether teaching code to kids at a local school, managing online programming groups and blogs or attending a conference, I find keeping involved helps me stay up to date.\nThis is also my chance to give back to the community that helped me get started, a place I am proud to be part of.\nI love to use the TALL stack (Tailwind CSS, Alpine.js, Laravel, and Laravel Livewire)\nI enjoy writing tutorials and working on Open Source packages.\nI also write books. My latest book is Modular: The Laravel way, which teaches how to work with Laravel Modules.\n"
          },
          "hidden": false,
          "ogMetaData": {
            "image": null
          },
          "seo": {
            "description": "For the past 18 years, I've been developing applications for the web using mostly PHP. I do this for a living and love what I do as every day there is something new and exciting to learn."
          }
        }
      },
      {
        "id": "61c2781750d5020b9758c6e0",
        "label": "Books",
        "url": "https://dcblog.dev/series/books",
        "type": "series",
        "series": {
          "id": "61c2770250d5020b9758c6d8",
          "name": "Books",
          "createdAt": "2021-12-22T00:53:22.275Z",
          "description": {
            "html": "My growing collection of books I have written, both with a publisher and self-published.\n",
            "markdown": "My growing collection of books I have written, both with a publisher and self-published.",
            "text": "My growing collection of books I have written, both with a publisher and self-published.\n"
          },
          "coverImage": "",
          "cuid": "ckxgtoc8203dbafs1el7b6he1",
          "slug": "books",
          "sortOrder": "dsc",
          "author": {
            "id": "57052b54115103c3b0977f63",
            "name": "David Carr",
            "username": "dcblogdev",
            "bio": {
              "html": "<p>Blogger at http://dcblog.dev. Senior Full Stack Engineer at Vivedia</p>\n",
              "markdown": "Blogger at http://dcblog.dev. Senior Full Stack Engineer at Vivedia",
              "text": "Blogger at http://dcblog.dev. Senior Full Stack Engineer at Vivedia\n"
            },
            "profilePicture": "https://cdn.hashnode.com/res/hashnode/image/upload/v1553188817552/Ttjno27W7.png",
            "socialMediaLinks": {
              "website": "https://dcblog.dev",
              "github": "https://github.com/dcblogdev",
              "twitter": "https://twitter.com/dcblogdev",
              "instagram": "",
              "facebook": "",
              "stackoverflow": "",
              "linkedin": "https://www.linkedin.com/in/daveismyname/",
              "youtube": "https://www.youtube.com/c/DCBlogdev"
            },
            "badges": [
              {
                "id": "63b76f1c4f7da571a622758f",
                "name": "Crazy Blogger",
                "description": "Wrote a blog post every day for 7 days",
                "image": "https://cdn.hashnode.com/res/hashnode/image/upload/v1696319717434/3NY4Dyu1p.png?auto=compress",
                "dateAssigned": "2023-01-06T00:45:16.768Z",
                "infoURL": null,
                "suppressed": null
              },
              {
                "id": "5fbe4e9d1b2aff20d3f0ab6a",
                "name": "Word Warrior",
                "description": "Wrote an in-depth blog post with more than 2K words",
                "image": "https://cdn.hashnode.com/res/hashnode/image/upload/v1696319757778/s7nOYDsve.png?auto=compress",
                "dateAssigned": "2020-11-25T10:50:28.230Z",
                "infoURL": null,
                "suppressed": true
              },
              {
                "id": "5fbe4e9d1b2aff20d3f0ab69",
                "name": "Self Starter",
                "description": "Wrote a blog post after joining Hashnode",
                "image": "https://cdn.hashnode.com/res/hashnode/image/upload/v1696319802391/hvWFt1_AU.png?auto=compress",
                "dateAssigned": "2020-11-25T10:50:28.230Z",
                "infoURL": null,
                "suppressed": true
              }
            ],
            "followersCount": 314,
            "followingsCount": 101,
            "tagline": "Web developer",
            "dateJoined": "2016-04-06T15:29:24.241Z",
            "location": "United Kingdom",
            "availableFor": "Freelance content creation\n",
            "tagsFollowing": [
              {
                "id": "56744721958ef13879b94b91",
                "name": "CSS",
                "slug": "css",
                "logo": "https://cdn.hashnode.com/res/hashnode/image/upload/v1513316949083/By6UMkbfG.png",
                "tagline": "A style sheet language used for describing the presentation of a document written in a markup language.",
                "info": {
                  "html": "<p>Cascading Style Sheets (CSS) is a stylesheet language used to describe the presentation of a document written in HTML. CSS describes how elements should be rendered on screen, on paper, in speech, or on other media. <a target='_blank' rel='noopener noreferrer'  href=\"https://developer.mozilla.org/en-US/docs/Web/CSS\">MDN</a></p>\n",
                  "markdown": "Cascading Style Sheets (CSS) is a stylesheet language used to describe the presentation of a document written in HTML. CSS describes how elements should be rendered on screen, on paper, in speech, or on other media. [MDN](https://developer.mozilla.org/en-US/docs/Web/CSS)",
                  "text": "Cascading Style Sheets (CSS) is a stylesheet language used to describe the presentation of a document written in HTML. CSS describes how elements should be rendered on screen, on paper, in speech, or on other media. MDN\n"
                },
                "followersCount": 171643,
                "postsCount": 10690
              },
              {
                "id": "56744722958ef13879b94fd9",
                "name": "PHP",
                "slug": "php",
                "logo": "https://cdn.hashnode.com/res/hashnode/image/upload/v1513177307594/rJ4Jba0-G.png",
                "tagline": "PHP is a server-side scripting language designed for web development but also used as a general-purpose programming language. Originally created by Rasmus Lerdorf in 1994, the PHP reference implementation is now produced by The PHP Group.",
                "info": {
                  "html": "<p>PHP is a server-side scripting language designed for web development but also used as a general-purpose programming language. Originally created by Rasmus Lerdorf in 1994, the PHP reference implementation is now produced by The PHP Group.</p>\n",
                  "markdown": "PHP is a server-side scripting language designed for web development but also used as a general-purpose programming language. Originally created by Rasmus Lerdorf in 1994, the PHP reference implementation is now produced by The PHP Group.",
                  "text": "PHP is a server-side scripting language designed for web development but also used as a general-purpose programming language. Originally created by Rasmus Lerdorf in 1994, the PHP reference implementation is now produced by The PHP Group.\n"
                },
                "followersCount": 87548,
                "postsCount": 3978
              },
              {
                "id": "56744723958ef13879b9526c",
                "name": "Git",
                "slug": "git",
                "logo": "https://res.cloudinary.com/hashnode/image/upload/v1473706112/l2hom2y5xxpgwlgg0sz0.jpg",
                "tagline": "Git is a version control system for tracking changes in computer files and coordinating work on those files among multiple people",
                "info": {
                  "html": "<p>Git is a widely used version control system for software development. It is a distributed revision control system with an emphasis on speed, data integrity, and support for distributed, non-linear workflows.</p>\n",
                  "markdown": "Git is a widely used version control system for software development. It is a distributed revision control system with an emphasis on speed, data integrity, and support for distributed, non-linear workflows.",
                  "text": "Git is a widely used version control system for software development. It is a distributed revision control system with an emphasis on speed, data integrity, and support for distributed, non-linear workflows.\n"
                },
                "followersCount": 23672,
                "postsCount": 5719
              },
              {
                "id": "56744721958ef13879b94c63",
                "name": "GitHub",
                "slug": "github",
                "logo": "https://cdn.hashnode.com/res/hashnode/image/upload/v1513321555902/BkhLElZMG.png",
                "tagline": "GitHub is a development platform inspired by the way you work. From open source to business, you can host and review code, manage projects, and build software alongside millions of other developers.",
                "info": {
                  "html": "<p>GitHub is a Web-based Git repository hosting service. It offers all of the distributed revision control and source code management (SCM) functionality of Git as well as adding its own features. <a target='_blank'  href=\"https://en.wikipedia.org/wiki/GitHub\">GitHub</a></p>\n",
                  "markdown": "GitHub is a Web-based Git repository hosting service. It offers all of the distributed revision control and source code management (SCM) functionality of Git as well as adding its own features. [GitHub](https://en.wikipedia.org/wiki/GitHub)",
                  "text": "GitHub is a Web-based Git repository hosting service. It offers all of the distributed revision control and source code management (SCM) functionality of Git as well as adding its own features. GitHub\n"
                },
                "followersCount": 189468,
                "postsCount": 7986
              },
              {
                "id": "56744723958ef13879b95216",
                "name": "Sublime Text",
                "slug": "sublime-text",
                "logo": "https://res.cloudinary.com/hashnode/image/upload/v1497046439/xny5lu0xfjzpfybrrl9c.png",
                "tagline": "Sublime Text is a proprietary cross-platform source code editor with a Python application programming interface.",
                "info": {
                  "html": "<p>Sublime Text is a lightweight text editor for code and markup. It&#39;s free and has a sleak user interface. Features like Distraction Free Mode, Instant Project Switch, Split Editing etc make it one of the best editors for developers. <a target='_blank' rel='noopener noreferrer'  href=\"http://www.sublimetext.com\">SublimeText.com</a></p>\n",
                  "markdown": "Sublime Text is a lightweight text editor for code and markup. It's free and has a sleak user interface. Features like Distraction Free Mode, Instant Project Switch, Split Editing etc make it one of the best editors for developers. [SublimeText.com](http://www.sublimetext.com)",
                  "text": "Sublime Text is a lightweight text editor for code and markup. It's free and has a sleak user interface. Features like Distraction Free Mode, Instant Project Switch, Split Editing etc make it one of the best editors for developers. SublimeText.com\n"
                },
                "followersCount": 2658,
                "postsCount": 77
              },
              {
                "id": "56744721958ef13879b94a83",
                "name": "Laravel",
                "slug": "laravel",
                "logo": "https://res.cloudinary.com/hashnode/image/upload/v1454754733/exjubzyuvwz0pvvpxxwv.jpg",
                "tagline": "Laravel is a free, open-source PHP web framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller architectural pattern",
                "info": {
                  "html": "<p>Laravel is a free, open-source PHP web application framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller (MVC) architectural pattern. Some of the features of Laravel are a modular packaging system with a dedicated dependency manager, different ways for accessing relational databases, utilities that aid in application deployment and maintenance, and its orientation toward syntactic sugar. <a href=\"https://en.wikipedia.org/wiki/Laravel\">Wikipedia</a></p>\n",
                  "markdown": "Laravel is a free, open-source PHP web application framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller (MVC) architectural pattern. Some of the features of Laravel are a modular packaging system with a dedicated dependency manager, different ways for accessing relational databases, utilities that aid in application deployment and maintenance, and its orientation toward syntactic sugar. [Wikipedia](https://en.wikipedia.org/wiki/Laravel)",
                  "text": "Laravel is a free, open-source PHP web application framework, created by Taylor Otwell and intended for the development of web applications following the model–view–controller (MVC) architectural pattern. Some of the features of Laravel are a modular packaging system with a dedicated dependency manager, different ways for accessing relational databases, utilities that aid in application deployment and maintenance, and its orientation toward syntactic sugar. Wikipedia\n"
                },
                "followersCount": 16865,
                "postsCount": 2413
              }
            ],
            "deactivated": false,
            "following": false,
            "followsBack": false,
            "isPro": false
          }
        },
        "page": null
      },
      {
        "id": "61c9b5e45fc5da1847327734",
        "label": "Open Source",
        "url": "https://docs.dcblog.dev",
        "type": "link",
        "series": null,
        "page": null
      },
      {
        "id": "64dcc9a76203e95780d686fa",
        "label": "Sponsor",
        "url": "https://dcblog.dev/sponsor",
        "type": "link",
        "series": null,
        "page": null
      }
    ],
    "layout": "magazine",
    "disableFooterBranding": false,
    "isSubscriptionModalDisabled": false
  },
  "imprintV2": null,
  "links": {
    "twitter": "https://twitter.com/dcblogdev",
    "instagram": "",
    "github": "https://github.com/dcblogdev",
    "website": "",
    "hashnode": "https://hashnode.com/@dcblogdev",
    "youtube": "https://www.youtube.com/c/dcblogdev",
    "dailydev": "https://app.daily.dev/dcblogdev",
    "linkedin": "https://www.linkedin.com/in/dcblogdev/",
    "mastodon": ""
  },
  "domainInfo": {
    "hashnodeSubdomain": "dcblogdev",
    "domain": {
      "host": "dcblog.dev",
      "ready": true,
      "status": "VALID",
      "verifiedAt": "2024-02-03T14:30:08.501Z"
    },
    "wwwPrefixedDomain": null
  }
}
```

## Get Posts

```php
Hashnode::getPosts()
```

Example Response

```php
{
  "edges": [
    {
      "node": {
        "title": "PHP use an enum for Filters",
        "slug": "php-use-an-enum-for-filters",
        "brief": "I have a class that allows filtering based on an option, I need a way to accept options and also reject invalid options.\nIn the past, I would reach for a switch statement, or more recently a match statement. But an enum is better suited for this task...",
        "readTimeInMinutes": 2,
        "publishedAt": "2024-05-03T10:55:24.205Z",
        "views": 0,
        "url": "https://dcblog.dev/php-use-an-enum-for-filters",
        "coverImage": {
          "url": "https://cdn.hashnode.com/res/hashnode/image/upload/v1714733973712/55a0a6f0-fef9-45f9-a6d4-19fa90914618.png"
        },
        "tags": [
          {
            "name": "Filter",
            "slug": "filter"
          },
          {
            "name": "enum",
            "slug": "enum"
          },
          {
            "name": "Testing",
            "slug": "testing"
          },
          {
            "name": "pestphp",
            "slug": "pestphp"
          }
        ],
        "author": ...
          "deactivated": false,
          "following": false,
          "followsBack": false,
          "isPro": false
        }
      }
    },
    }
  ],
  "pageInfo": {
    "endCursor": "NjQxODg4ZWY4Y2ExNWM0MzdiMzE2ZmYxXzIwMjMtMDMtMThUMTI6MjQ6MDAuMDAwWg==",
    "hasNextPage": true
  }
}
```

### Paging

Pagination is done using the `pageInfo` object returned in the response. You can use the `endCursor` to get the next page of posts.

```php
return view('blog.index', [
    'posts' => $posts->edges,
    'pageInfo' => $posts->pageInfo,
]);
```

In a view check if there is a next page and if so use the `endCursor` to get the next page of posts.

```php
@if($pageInfo->hasNextPage)
    <a href="{{ url()->current().'?next='.$pageInfo->endCursor }}">Next Page</a> 
@endif
```


## Get Post

```php
Hashnode::getPost($slug)
```

Example Response

```php
{
  "edges": [
    {
      "node": {
        "title": "PHP use an enum for Filters",
        "slug": "php-use-an-enum-for-filters",
        "brief": "I have a class that allows filtering based on an option, I need a way to accept options and also reject invalid options.\nIn the past, I would reach for a switch statement, or more recently a match statement. But an enum is better suited for this task...",
        "readTimeInMinutes": 2,
        "publishedAt": "2024-05-03T10:55:24.205Z",
        "views": 0,
        "url": "https://dcblog.dev/php-use-an-enum-for-filters",
        "coverImage": {
          "url": "https://cdn.hashnode.com/res/hashnode/image/upload/v1714733973712/55a0a6f0-fef9-45f9-a6d4-19fa90914618.png"
        },
        "tags": [
          {
            "name": "Filter",
            "slug": "filter"
          },
          {
            "name": "enum",
            "slug": "enum"
          },
          {
            "name": "Testing",
            "slug": "testing"
          },
          {
            "name": "pestphp",
            "slug": "pestphp"
          }
        ],
        "author": ...
          "deactivated": false,
          "following": false,
          "followsBack": false,
          "isPro": false
        }
      }
    },
    }
  ],
  "pageInfo": {
    "endCursor": "NjQxODg4ZWY4Y2ExNWM0MzdiMzE2ZmYxXzIwMjMtMDMtMThUMTI6MjQ6MDAuMDAwWg==",
    "hasNextPage": true
  }
}
```

## Get Posts by Tag

```php
Hashnode::postByTag($slug)
```

Example Response

```php
{
  "edges": [
    {
      "node": {
        "title": "PHP use an enum for Filters",
        "slug": "php-use-an-enum-for-filters",
        "brief": "I have a class that allows filtering based on an option, I need a way to accept options and also reject invalid options.\nIn the past, I would reach for a switch statement, or more recently a match statement. But an enum is better suited for this task...",
        "readTimeInMinutes": 2,
        "publishedAt": "2024-05-03T10:55:24.205Z",
        "views": 0,
        "url": "https://dcblog.dev/php-use-an-enum-for-filters",
        "coverImage": {
          "url": "https://cdn.hashnode.com/res/hashnode/image/upload/v1714733973712/55a0a6f0-fef9-45f9-a6d4-19fa90914618.png"
        },
        "tags": [
          {
            "name": "Filter",
            "slug": "filter"
          },
          {
            "name": "enum",
            "slug": "enum"
          },
          {
            "name": "Testing",
            "slug": "testing"
          },
          {
            "name": "pestphp",
            "slug": "pestphp"
          }
        ],
        "author": ...
          "deactivated": false,
          "following": false,
          "followsBack": false,
          "isPro": false
        }
      }
    },
    }
  ],
  "pageInfo": {
    "endCursor": "NjQxODg4ZWY4Y2ExNWM0MzdiMzE2ZmYxXzIwMjMtMDMtMThUMTI6MjQ6MDAuMDAwWg==",
    "hasNextPage": true
  }
}
```

## Get Posts by search term

```php
Hashnode::searchPosts($term)
```

Example Response

```php
{
  "edges": [
    {
      "node": {
        "title": "PHP use an enum for Filters",
        "slug": "php-use-an-enum-for-filters",
        "brief": "I have a class that allows filtering based on an option, I need a way to accept options and also reject invalid options.\nIn the past, I would reach for a switch statement, or more recently a match statement. But an enum is better suited for this task...",
        "readTimeInMinutes": 2,
        "publishedAt": "2024-05-03T10:55:24.205Z",
        "views": 0,
        "url": "https://dcblog.dev/php-use-an-enum-for-filters",
        "coverImage": {
          "url": "https://cdn.hashnode.com/res/hashnode/image/upload/v1714733973712/55a0a6f0-fef9-45f9-a6d4-19fa90914618.png"
        },
        "tags": [
          {
            "name": "Filter",
            "slug": "filter"
          },
          {
            "name": "enum",
            "slug": "enum"
          },
          {
            "name": "Testing",
            "slug": "testing"
          },
          {
            "name": "pestphp",
            "slug": "pestphp"
          }
        ],
        "author": ...
          "deactivated": false,
          "following": false,
          "followsBack": false,
          "isPro": false
        }
      }
    },
    }
  ],
}
```

## Get Pages

```php
Hashnode::getPages()
```

Example Response

```php
{
  "edges": [
    {
      "node": {
        "title": "About Me",
        "slug": "about-me"
      }
    },
    {
      "node": {
        "title": "Books",
        "slug": "books"
      }
    },
    {
      "node": {
        "title": "Demo",
        "slug": "demo"
      }
    }
  ]
}
```

## Get Page

```php
Hashnode::getPage($slug)
```

Example Response

```php
{
  "id": "663bb2e3e5735f5642504d4e",
  "title": "Demo",
  "slug": "demo",
  "content": {
    "html": "<p>Hello there.</p>\n<p>Cool page content.</p>\n<h2 id=\"heading-code\">Code:</h2>\n<pre><code>query <span class=\"hljs-keyword\">Publication</span> {\n  <span class=\"hljs-keyword\">publication</span>(host: \"dcblog.dev\") {\n    isTeam\n    title\n    staticPages(first: <span class=\"hljs-number\">10</span>) {\n      edges {\n        node {\n          title\n          slug\n        }\n      }\n    }\n  }\n}\n</code></pre>",
    "markdown": "Hello there.\n\nCool page content.\n\n## Code:\n\n\n```\nquery Publication {\n  publication(host: \"dcblog.dev\") {\n    isTeam\n    title\n    staticPages(first: 10) {\n      edges {\n        node {\n          title\n          slug\n        }\n      }\n    }\n  }\n}\n```",
    "text": "Hello there.\nCool page content.\nCode:\nquery Publication {\n  publication(host: \"dcblog.dev\") {\n    isTeam\n    title\n    staticPages(first: 10) {\n      edges {\n        node {\n          title\n          slug\n        }\n      }\n    }\n  }\n}\n"
  },
  "ogMetaData": {
    "image": "https://cdn.hashnode.com/res/hashnode/image/upload/v1715191388031/A-2-tf9nM.png"
  },
  "seo": {
    "title": null,
    "description": "desc"
  }
}
```

## Community

There is a Discord community. https://discord.gg/VYau8hgwrm For quick help, ask questions in the appropriate channel.

## Contributing

Contributions are welcome and will be fully credited.

Contributions are accepted via Pull Requests on [Github][4].

## Pull Requests

- **Document any change in behaviour** - Make sure the `readme.md` and any other relevant documentation are kept up-to-date.

- **Consider our release cycle** - We try to follow [SemVer v2.0.0][5]. Randomly breaking public APIs is not an option.

- **One pull request per feature** - If you want to do more than one thing, send multiple pull requests.

## Security

If you discover any security related issues, please email dave@dcblog.dev email instead of using the issue tracker.

## License

license. Please see the [license file][6] for more information.

[4]:    https://github.com/dcblogdev/laravel-hashnode
[5]:    http://semver.org/
[6]:    license.md
