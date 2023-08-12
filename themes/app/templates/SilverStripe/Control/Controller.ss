<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        $MetaTags
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@700&family=Merriweather+Sans:wght@300;400;700&display=swap" rel="stylesheet">
        <style>
            #app { font-family: 'Merriweather Sans', sans-serif; font-weight: 300;  }
            #logo figcaption { font-family: 'Inter', sans-serif; font-weight: 700; color: #575F6D; font-size: 34px; margin-left: 4px; }
            #logo b { color: #579BD9; }
        </style>
        <script src="https://cdn.tailwindcss.com?plugins=forms,typography,aspect-ratio"></script>
        <% require themedCSS('client/styles/debug') %>
        <title><% if $Title %>$Title<% else %>Recipe Serverless<% end_if %></title>
    </head>
    <body id="app" class="antialiased">
    <div class="relative max-w-2xl mx-auto">
        <div class="flex flex-col min-h-screen sm:flex-row sm:items-center lg:p-4">
            <div class="flex flex-col flex-grow bg-white sm:shadow-2xl sm:rounded-lg sm:overflow-hidden">
                <header class="flex-grow flex flex-col justify-center px-9 py-11">
                    <div class="flex items-center justify-between">
                        <a href="/" title="ServerLess" class="no-underline">
                            <figure id="logo" class="flex ">
                                <svg width="38" height="45" viewBox="0 0 38 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.19209e-05 17L5.65687 11.3431L22.6274 28.3137L16.9706 33.9706L1.19209e-05 17Z" fill="#3083D0"/>
                                    <path d="M16.9706 0L22.6274 5.65685L11.3137 17L5.65687 11.3431L16.9706 0Z" fill="#3083D0"/>
                                    <path d="M20.6569 44.9706L15 39.3137L31.9706 22.3431L37.6274 28L20.6569 44.9706Z" fill="#579BD9"/>
                                    <path d="M31.9706 22.3431L26.3137 28L15 16.6569L20.6569 11L31.9706 22.3431Z" fill="#579BD9"/>
                                </svg>
                                <figcaption>Server<b>Less</b></figcaption>
                            </figure>
                        </a>
                        <ul class="flex justify-end">
                            <li class="ml-2"><a class="font-normal text-gray-500 hover:text-gray-800" href="/getting-started" title="Getting started">Getting started</a></li>
                            <li class="ml-2"><a class="font-normal text-gray-500" href="/" title="Github">
                                <svg class="fill-gray-500 hover:fill-gray-800" width="16" height="22" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 0C3.58 0 0 3.58 0 8C0 11.54 2.29 14.53 5.47 15.59C5.87 15.66 6.02 15.42 6.02 15.21C6.02 15.02 6.01 14.39 6.01 13.72C4 14.09 3.48 13.23 3.32 12.78C3.23 12.55 2.84 11.84 2.5 11.65C2.22 11.5 1.82 11.13 2.49 11.12C3.12 11.11 3.57 11.7 3.72 11.94C4.44 13.15 5.59 12.81 6.05 12.6C6.12 12.08 6.33 11.73 6.56 11.53C4.78 11.33 2.92 10.64 2.92 7.58C2.92 6.71 3.23 5.99 3.74 5.43C3.66 5.23 3.38 4.41 3.82 3.31C3.82 3.31 4.49 3.1 6.02 4.13C6.66 3.95 7.34 3.86 8.02 3.86C8.7 3.86 9.38 3.95 10.02 4.13C11.55 3.09 12.22 3.31 12.22 3.31C12.66 4.41 12.38 5.23 12.3 5.43C12.81 5.99 13.12 6.7 13.12 7.58C13.12 10.65 11.25 11.33 9.47 11.53C9.76 11.78 10.01 12.26 10.01 13.01C10.01 14.08 10 14.94 10 15.21C10 15.42 10.15 15.67 10.55 15.59C12.1381 15.0539 13.5182 14.0332 14.4958 12.6716C15.4735 11.3101 15.9996 9.6762 16 8C16 3.58 12.42 0 8 0Z" />
                                </svg>
                                </a>
                            </li>
                        </ul>
                    </div>

                    <% if $Title %>
                        <h1 class="text-[#28445F] sm:font-normal text-3xl sm:text-[40px] mt-8">$Title</h1>
                    <% end_if %>

                    <% if $Summary %>
                        <p class="text-[#6B7280] text-xl font-normal mt-8 leading-relaxed">$Summary</p>
                    <% end_if %>
                </header>
                <main class="bg-[#EEF5FA] border border-[#D8E7F5] px-9 py-11">
                    $Layout
                </main>

                <footer class="bg-[#575F6D] h-16 grid content-center">
                    <ul class="flex justify-center">
                        <li class="ml-2"><a class="font-normal text-white" href="/" title="Home">Home</a></li>
                        <li class="ml-2"><a class="font-normal text-white" href="/blog" title="Blog">Blog</a></li>
                        <li class="ml-2"><a class="font-normal text-white" href="/" title="Github">
                            <svg class="fill-white" width="16" height="22" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 0C3.58 0 0 3.58 0 8C0 11.54 2.29 14.53 5.47 15.59C5.87 15.66 6.02 15.42 6.02 15.21C6.02 15.02 6.01 14.39 6.01 13.72C4 14.09 3.48 13.23 3.32 12.78C3.23 12.55 2.84 11.84 2.5 11.65C2.22 11.5 1.82 11.13 2.49 11.12C3.12 11.11 3.57 11.7 3.72 11.94C4.44 13.15 5.59 12.81 6.05 12.6C6.12 12.08 6.33 11.73 6.56 11.53C4.78 11.33 2.92 10.64 2.92 7.58C2.92 6.71 3.23 5.99 3.74 5.43C3.66 5.23 3.38 4.41 3.82 3.31C3.82 3.31 4.49 3.1 6.02 4.13C6.66 3.95 7.34 3.86 8.02 3.86C8.7 3.86 9.38 3.95 10.02 4.13C11.55 3.09 12.22 3.31 12.22 3.31C12.66 4.41 12.38 5.23 12.3 5.43C12.81 5.99 13.12 6.7 13.12 7.58C13.12 10.65 11.25 11.33 9.47 11.53C9.76 11.78 10.01 12.26 10.01 13.01C10.01 14.08 10 14.94 10 15.21C10 15.42 10.15 15.67 10.55 15.59C12.1381 15.0539 13.5182 14.0332 14.4958 12.6716C15.4735 11.3101 15.9996 9.6762 16 8C16 3.58 12.42 0 8 0Z" />
                            </svg>
                        </a>
                        </li>
                    </ul>
                </footer>
            </div>
        </div>
    </div>
    </body>
</html>
