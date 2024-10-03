<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style>
        footer {
            width: 100%;
            min-height: 300px;
            max-height: auto;
            background-color: rgb(236, 229, 229);
            margin-top: 10px;
            clear: both;
        }

        footer .footer-wrap {
            width: 80%;
            margin: 0 auto;
            padding-left: 9%;
            color: rgb(0, 0, 0);
        }

        .widgetFooter {
            width: calc(85%/3);
            height: auto;
            float: left;
            padding: 2.5%;
            text-align: left;
        }

        h4.uppercase {
            text-transform: uppercase;
        }

        ul#footerUsefulLink,
        ul#footerMediaLinks {
            list-style-type: none;
            margin: 0;
            padding: 0;
            line-height: 40px;
            text-transform: capitalize;
        }

        ul#footerUsefulLink li,
        ul#footerMediaLinks li {
            cursor: pointer;
            /* transition: border-bottom 3s ease-in; */
        }

        ul#footerUsefulLink li:hover .usefulLinksIcons,
        ul#footerUsefulLink li:hover a {
            color: #00CED1;
            /* border-bottom: 1px solid red; */
        }

        ul#footerMediaLinks li:hover span.fb,
        ul#footerMediaLinks li:hover a.fb {
            color: #3b5998;
        }

        ul#footerMediaLinks li:hover span.twit,
        ul#footerMediaLinks li:hover a.twit {
            color: #1DA1F2;
        }

        ul#footerMediaLinks li:hover span.insta,
        ul#footerMediaLinks li:hover a.insta {
            color: #ffc838;
        }

        ul#footerMediaLinks li:hover span.git,
        ul#footerMediaLinks li:hover a.git {
            color: #f1502f;
        }

        div#footerLogo img {
            width: 50%;
            margin: 25% 0;
        }

        div.footerCopy {
            clear: both;
            color: rgb(0, 0, 0);
            text-align: center;
            padding-bottom: 5px;
            border-top: 1px solid #ccc;
        }

        @media (max-width:800px) {
            footer .footer-wrap {
                width: 100%;
                padding: 0;
            }

            .widgetFooter:not(:nth-of-type(2)) {
                width: calc(90%/2);
                text-align: center;
                font-size: 0.9em;
            }

            .widgetFooter:nth-of-type(2) {
                display: none;
            }

            div.footerCopy {
                font-size: 0.8em;
            }
        }

        @media (max-width:600px) {
            .widgetFooter:not(:nth-of-type(2)) {
                text-align: left;
            }
        }

        @media (max-width:500px) {
            footer {
                min-height: auto;
            }

            .widgetFooter:not(:nth-of-type(2)) {
                width: 100%;
                padding: 0;
                text-align: center;
            }

            ul#footerUsefulLink,
            ul#footerMediaLinks {
                display: flex;
            }

            ul#footerUsefulLink li,
            ul#footerMediaLinks li {
                float: left;
                flex: 1;
                text-align: center;
                font-size: 1.5em;
            }

            ul#footerUsefulLink li a,
            ul#footerMediaLinks li a {
                display: none;
            }

            ul#footerUsefulLink li:hover,
            ul#footerUsefulLink li:hover .usefulLinksIcons,
            ul#footerUsefulLink li:hover a {
                color: white;
                background-color: #00CED1;
            }

            ul#footerMediaLinks li.media1:hover,
            ul#footerMediaLinks li:hover span.fb,
            ul#footerMediaLinks li:hover a.fb {
                background-color: #3b5998;
                color: white;
            }

            ul#footerMediaLinks li.media2:hover,
            ul#footerMediaLinks li:hover span.twit,
            ul#footerMediaLinks li:hover a.twit {
                background-color: #1DA1F2;
                color: white;
            }

            ul#footerMediaLinks li.media3:hover,
            ul#footerMediaLinks li:hover span.insta,
            ul#footerMediaLinks li:hover a.insta {
                background-color: #ffc838;
                color: white;
            }

            ul#footerMediaLinks li.media4:hover,
            ul#footerMediaLinks li:hover span.git,
            ul#footerMediaLinks li:hover a.git {
                background-color: #f1502f;
                color: white;
            }
        }
    </style>
</head>
