# AECC website 2024-25

The website for AECC, the computer science student association (ACM chapter) at the University of Puerto Rico at Bayamón. It introduces the association, its activities and team, and gives prospective members a way to get in touch.

I built it while serving as the association's vice president, secretary and project manager.

## What is in this repository

| Path | Purpose |
|---|---|
| `index.html` | Home page with the association's activities and testimonials |
| `about.html`, `service.html`, `team.html`, `feature.html`, `price.html`, `quote.html`, `testimonial.html`, `1blog.html`, `1detail.html` | Inner pages |
| `contact.html`, `mail.php` | Contact page and its form handler |
| `css/`, `js/`, `img/`, `lib/` | Styles, scripts, images and the front-end libraries the pages load |
| `ext/PHPMailer-master/` | PHPMailer, used by the contact form |
| `emails/` | The "message sent" page |

## Running it

It is a static site, so any web server works:

```bash
python3 -m http.server 8000
```

The contact form also needs PHP and an SMTP account for the association's mailbox. Set the password in the `SMTP_PASSWORD` environment variable; it is not stored in the code. Without PHP, every other page works as it is.

## Built with

HTML, CSS, JavaScript, Bootstrap and Owl Carousel, on the free Startup template from [HTML Codex](https://htmlcodex.com) (license in `LICENSE.txt`). The content, structure and customization for the association are mine.

## Author

Gianlexis Quiñones Candelaria. [LinkedIn](https://www.linkedin.com/in/gianquinones21/) · [GitHub](https://github.com/ohitsgian21)
