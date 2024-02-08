<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Rest Api</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="{{asset('build/assets/app-uV8d6AZs.css')}}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
   <!-- tailwind cdn -->
    <script src="https://cdn.tailwindcss.com"></script>
</head>

<body class="font-mono">
    <!-- nav bar -->
    @if (Route::has('login'))
    <div class="row-span-full fixed sm:top-0 shadow  w-full sm:right-0 bg-transparent p-6 text-right z-10">
        <a href="" class="font-bold text-white float-left">REST API CRUD</a>
        @auth
        <a href="{{ url('/dashboard') }}" class="font-semibold text-gray-600 hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Dashboard</a>
        @else
        <a href="{{ route('login') }}" class="font-semibold text-gray-600 hover:text-gray-900">Log in</a>

        @if (Route::has('register'))
        <a href="{{ route('register') }}" class="ml-4 font-semibold text-gray-600 hover:text-gray-900 ">Register</a>
        @endif
        @endauth

    </div>
    @endif
    <main class="border border-gray-900 h-screen grid place-content-center">
    <!-- slider container -->    
    <div class="slider-container">
            <div class="slider-track ">
            <!-- background video -->   
            <video playsinline autoplay muted loop>
                    <source src="{{asset('build/img/video (2160p).mp4')}}" type="video/mp4">
                </video>
                <!-- read more button -->
                <p class="api_intro z-10 top-56 font-bold text-lime-50 w-72 absolute"> way of accessing web services in a simple and flexible way without having any processing.
                @if (Route::has('login'))
                @auth  
                <button type="button" class="p-2 bg-blue-500 text-white font-bold" onclick="openModal()">Read more</button></p>
            @else
<button disabled="disabled" type="button" class="p-2 bg-gray-300 text-white font-bold cursor-not-allowed" title="Login to read more!">Read More</button>
@endif
@endauth
            </div>
<!-- slider img -->
            <img class="slider-thumb" loading="lazy" id="image1" onclick="openModal()=window.scrollX({top:200,behaviour:'smooth'})" src="{{asset('build/img/apir.jpg')}}">
            <img class="slider-thumb" loading="lazy" id="image2" src="{{asset('build/img/db.jpeg')}}">
            <img class="slider-thumb" loading="lazy" id="image3" src="{{asset('build/img/O-que-e-CRUD-740x414.webp')}}">
            <img class="slider-thumb" loading="lazy" id="image4" src="{{asset('build/img/client.jpeg')}}">
            <div class="value font-bold text-lime-600 text-6xl absolute text-shadow"></div>
        </div>

        <!-- modal -->
        <div class="w-full h-full hidden place-items-center z-20 absolute " id="modal">
            <div class="modal relative flex w-full h-full md:w-3/4 md:h-3/4 overflow-y-auto bg-blue-500 opacity-80  ">
                <button onclick="closeModal()" class="float-right text-3xl text-white font-bold fixed">x</button>
                <section class=" w-full p-4 md:p-0 text-white">
                    <div id="list_1" class=" section p-4">
                        <header class="bg-green-400 text-center p-4 text-white font-bold">What is API?</header>
                        <p class="p-2">An <mark>Application Programming Interface</mark> (API) defines the rules that you
                            must
                            follow to communicate with other software systems. Developers expose or create APIs so that
                            other
                            applications can communicate with their applications programmatically. For example, the
                            timesheet
                            application exposes an API that asks for an employee's full name and a range of dates. When it
                            receives this information, it internally processes the employee's timesheet and returns the
                            number of
                            hours worked in that date range.</p>
                        <h3 class="mt-2 p-2 font-bold">Clients:</h3>
                        <p class="p-2"><mark>Clients are users who want to access information from the web.</mark> The
                            client
                            can be a person or a software system that uses the API. For example, developers can write
                            programs
                            that access weather data from a weather system. Or you can access the same data from your
                            browser
                            when you visit the weather website directly.</p>
                        <h3 class="mt-2 p-2 font-bold">Resources:</h3>
                        <p class="p-2"><mark>Resources are the information that different applications provide to their
                                clients.</mark> Resources can be images, videos, text, numbers, or any type of data. The
                            machine
                            that gives the resource to the client is also called the server. Organizations use APIs to
                            share
                            resources and provide web services while maintaining security, control, and authentication. In
                            addition, APIs help them to determine which clients get access to specific internal
                            resources.</p>
                    </div>

                    <div id="list_2" class=" section p-4">
                        <header class="bg-green-400 text-center p-4 text-white font-bold">What is RESTful API?</header>
                        <p class="p-2"><mark>RESTful API is an interface that two computer systems use to exchange information securely over the internet.</mark> Most business applications have to communicate with other internal and third-party applications to perform various tasks. For example, to generate monthly payslips, your internal accounts system has to share data with your customer's banking system to automate invoicing and communicate with an internal timesheet application. RESTful APIs support this information exchange because they follow secure, reliable, and efficient software communication standards.</p>
                    </div>

                    <div id="list_3" class="p-4 section">
                        <header class="bg-green-400 text-center p-4 text-white font-bold">What is REST?</header>
                        <p class="p-2"><mark>Representational State Transfer</mark> (REST) is a software architecture
                            that
                            imposes conditions on how an API should work. REST was initially created as a guideline to
                            manage
                            communication on a complex network like the internet. You can use REST-based architecture to
                            support high-performing and reliable communication at scale. You can easily implement and
                            modify it,
                            bringing visibility and cross-platform portability to any API system.</p>
                        <p class="p-2 mt-1">API developers can design APIs using several different architectures. APIs
                            that
                            follow the REST architectural style are called REST APIs. Web services that implement REST
                            architecture are called RESTful web services. The term RESTful API generally refers to RESTful
                            web
                            APIs. However, you can use the terms REST API and RESTful API interchangeably.<br> Uniform
                            interface
                            imposes four architectural constraints:</p>
                        <h3 class="mt-2 p-2 font-bold">Uniform interface:</h3>
                        <p class="p-2"><mark>The uniform interface is fundamental to the design of any RESTful
                                webservice.</mark> It indicates that the server transfers information in a standard
                            format.
                            The
                            formatted resource is called a representation in REST. This format can be different from the
                            internal
                            representation of the resource on the server application. For example, the server can store
                            data as
                            text but send it in an HTML representation format.</p>
                        <ul class="p-2">
                            <li>1. Requests should identify resources. They do so by using a uniform resource
                                identifier.</li>
                            <li>2. Clients have enough information in the resource representation to modify or delete
                                the
                                resource if they want to. The server meets this condition by sending metadata that
                                describes
                                the resource further.</li>
                            <li>3. Clients receive information about how to process the representation further. The
                                server
                                achieves this by sending self-descriptive messages that contain metadata about how the
                                client
                                can best use them.</li>
                            <li>4. Clients receive information about all other related resources they need to complete a
                                task.
                                The server achieves this by sending hyperlinks in the representation so that clients can
                                dynamically discover more resources.</li>
                        </ul>
                        <h3 class="mt-2 p-2 font-bold">Statelessness:</h3>
                        <p class="p-2">In REST architecture,<mark> statelessness refers to a communication method in which the server completes every client request independently of all previous requests.</mark> Clients can request resources in any order, and every request is stateless or isolated from other requests. This REST API design constraint implies that the server can completely understand and fulfill the request every time. </p>
                        <h3 class="mt-2 p-2 font-bold">Layered system:</h3>
                        <p class="p-2">In a layered system architecture, <mark>the client can connect to other authorized intermediaries between the client and server, and it will still receive responses from the server.</mark> Servers can also pass on requests to other servers. You can design your RESTful web service to run on several servers with multiple layers such as security, application, and business logic, working together to fulfill client requests. These layers remain invisible to the client.</p>
                        <h3 class="mt-2 p-2 font-bold">Cacheability:</h3>
                        <p class="p-2">RESTful web services support caching, which is <mark>the process of storing some responses on the client or on an intermediary to improve server response time.</mark> For example, suppose that you visit a website that has common header and footer images on every page. Every time you visit a new website page, the server must resend the same images. To avoid this, the client caches or stores these images after the first response and then uses the images directly from the cache. RESTful web services control caching by using API responses that define themselves as cacheable or noncacheable.</p>
                        <h3 class="mt-2 p-2 font-bold">Code on demand:</h3>
                        <p class="p-2">In REST architectural style, servers can temporarily extend or customize client functionality by transferring software programming code to the client. For example, when you fill a registration form on any website, your browser immediately highlights any mistakes you make, such as incorrect phone numbers. It can do this because of the code sent by the server.</p>
                    </div>

                    <div id="list_4" class="p-4 section">
                        <header class="bg-green-400 text-center p-4 text-white font-bold">What are benefits of RESTful API?</header>
                        <h3 class="mt-2 p-2 font-bold">Scalability:</h3>
                        <p class="p-2"><mark>Systems that implement REST APIs can scale efficiently because REST optimizes client-server interactions. Statelessness removes server load because the server does not have to retain past client request information.</mark> Well-managed caching partially or completely eliminates some client-server interactions. All these features support scalability without causing communication bottlenecks that reduce performance.</p>
                        <h3 class="mt-2 p-2 font-bold">Flexibility:</h3>
                        <p class="p-2">RESTful web services support total client-server separation. They simplify and decouple various server components so that each part can evolve independently. Platform or technology changes at the server application do not affect the client application. The ability to layer application functions increases flexibility even further. For example, developers can make changes to the database layer without rewriting the application logic.</p>
                        <h3 class="mt-2 p-2 font-bold">Independence:</h3>
                        <p class="p-2"><mark>REST APIs are independent of the technology used. You can write both client and server applications in various programming languages without affecting the API design.</mark> You can also change the underlying technology on either side without affecting the communication.</p>
                    </div>

                    <div id="list_5" class="p-4 section">
                        <header class="bg-green-400 text-center p-4 text-white font-bold">How do RESTful APIs work?</header>
                        <h4 class="mt-2 p-2 font-bold text-white"><mark>The basic function of a RESTful API is the same as browsing the internet. The client contacts the server by using the API when it requires a resource.</mark> API developers explain how the client should use the REST API in the server application API documentation. These are the general steps for any REST API call:</h3>
                            <p class="p-2"><mark>1. The client sends a request to the server. The client follows the API documentation to format the request in a way that the server understands.</mark></p>
                            <p class="p-2"><mark>2. The server authenticates the client and confirms that the client has the right to make that request.</mark></p>
                            <p class="p-2"><mark>3. The server receives the request and processes it internally.</mark></p>
                            <p class="p-2"><mark>4. The server returns a response to the client. The response contains information that tells the client whether the request was successful. The response also includes any information that the client requested.</mark></p>
                            <p class="p-2 bg-red-400"><b>Note:</b>The REST API request and response details vary slightly depending on how the API developers design the API.</p>
                    </div>

                    <div id="list_6" class="p-4 section">
                        <header class="bg-green-400 text-center p-4 text-white font-bold">What does the RESTful API client request contain?</header>
                        <h4 class="mt-2 p-2 font-bold">Unique Resource Identifier(URI):</h4>
                        <p class="p-2">The server identifies each resource with unique resource identifiers. For REST services, the server typically performs resource identification by using a Uniform Resource Locator (URL). The URL specifies the path to the resource. A URL is similar to the website address that you enter into your browser to visit any webpage. The URL is also called the request endpoint and clearly specifies to the server what the client requires.</p>
                        <h4 class="mt-2 p-2 font-bold">Methods:</h4>
                        <p class="p-2"><mark>Developers often implement RESTful APIs by using the Hypertext Transfer Protocol (HTTP).</mark> An HTTP method tells the server what it needs to do to the resource. The following are four common HTTP methods:</p>
                        <h5 class="mt-2 p-2 font-bold">Get:</h5>
                        <p class="p-2">Clients use GET to access resources that are located at the specified URL on the server. They can cache GET requests and send parameters in the RESTful API request to instruct the server to filter data before sending.</p>
                        <h5 class="mt-2 p-2 font-bold">Post:</h5>
                        <p class="p-2">Clients use POST to send data to the server. They include the data representation with the request. Sending the same POST request multiple times has the side effect of creating the same resource multiple times.</p>
                        <h5 class="mt-2 p-2 font-bold">Put:</h5>
                        <p class="p-2">Clients use PUT to update existing resources on the server. Unlike POST, sending the same PUT request multiple times in a RESTful web service gives the same result.</p>
                        <h5 class="mt-2 p-2 font-bold">Delete:</h5>
                        <p class="p-2">Clients use the DELETE request to remove the resource. A DELETE request can change the server state. However, if the user does not have appropriate authentication, the request fails.</p>
                        <h4 class="mt-2 p-2 font-bold">HTTP headers:</h4>
                        <p class="p-2"><mark>Request headers are the metadata exchanged between the client and server.</mark> For instance, the request header indicates the format of the request and response, provides information about request status, and so on.</p>
                        <h5 class="mt-2 p-2 font-bold">Data:</h5>
                        <p class="p-2"><mark>REST API requests might include data for the POST, PUT, and other HTTP methods to work successfully.</mark></p>
                        <h5 class="mt-2 p-2 font-bold">Parameters:</h5>
                        <p class="p-2"><mark>RESTful API requests can include parameters that give the server more details about what needs to be done.</mark> The following are some different types of parameters:</p>
                        <li class="p-2">Path parameters that specify URL details.</li>
                        <li class="p-2">Query parameters that request more information about the resource.</li>
                        <li class="p-2">Cookie parameters that authenticate clients quickly.</li>
                    </div>

                    <div id="list_7" class="p-4 section">
                        <header class="bg-green-400 text-center p-4 text-white font-bold">What are RESTful API authentication methods?</header>
                        <p class="p-2">A RESTful web service must authenticate requests before it can send a response. Authentication is the process of verifying an identity. For example, you can prove your identity by showing an ID card or driver's license. Similarly, RESTful service clients must prove their identity to the server to establish trust.

                            <br>RESTful API has four common authentication methods:</br>
                        </p>
                        <h4 class="mt-2 p-2 font-b">HTTP Authentication:</h4>
                        <p class="p-2">
                            <mark>HTTP defines some authentication schemes that you can use directly when you are implementing REST API. The following are two of these schemes:</mark>
                        </p>
                        <h5 class="mt-2 p-2">Basic Authentication</h5>
                        <p class="p-2">In basic authentication, the client sends the user name and password in the request header. It encodes them with base64, which is an encoding technique that converts the pair into a set of 64 characters for safe transmission.</p>
                        <h5 class="mt-2 p-2">Bearer authentication</h5>
                        <p class="p-2">The term bearer authentication refers to the process of giving access control to the token bearer. The bearer token is typically an encrypted string of characters that the server generates in response to a login request. The client sends the token in the request headers to access resources.</p>
                        <h5 class="p-2 mt-2 font-bold">API keys</h5>
                        <p class="p-2">API keys are another option for REST API authentication. In this approach, the server assigns a unique generated value to a first-time client. Whenever the client tries to access resources, it uses the unique API key to verify itself. API keys are less secure because the client has to transmit the key, which makes it vulnerable to network theft.</p>
                        <h5 class="p-2 mt-2 font-bold">OAuth</h5>
                        <p class="p-2">OAuth combines passwords and tokens for highly secure login access to any system. The server first requests a password and then asks for an additional token to complete the authorization process. It can check the token at any time and also over time with a specific scope and longevity.</p>
                    </div>

                    <div id="list_8" class="p-4 section">
                        <header class="bg-green-400 text-center p-4 text-white font-bold">What does the RESTful API server response contain?</header>
                        <h4 class="mt-2 p-2 font-b">Status line:</h4>
                        <p class="p-2">The status line contains a three-digit status code that communicates request success or failure. For instance, 2XX codes indicate success, but 4XX and 5XX codes indicate errors. 3XX codes indicate URL redirection.</p>
                        <li class="p-2"><mark>200: Generic success response</mark></li>
                        <li class="p-2"><mark>201: POST method success response</mark></li>
                        <li class="p-2"><mark>400: Incorrect request that the server cannot process</mark></li>
                        <li class="p-2"><mark>404: Resource not found</mark></li>
                        <h4 class="mt-2 p-2 font-bold">Message body</h4>
                        <p class="p-2">The response body contains the resource representation. The server selects an appropriate representation format based on what the request headers contain. Clients can request information in XML or JSON formats, which define how the data is written in plain text. For example, if the client requests the name and age of a person named John, the server returns a JSON representation as follows:</p>
                        <p class="p-2 bg-yellow-400"><b>eg:</b>'{"name":"John", "age":30}'</p>
                        <h4 class="mt-2 p-2 font-bold">Headers:</h4>
                        <p class="p-2">The response also contains headers or metadata about the response. They give more context about the response and include information such as the server, encoding, date, and content type.</p>

                    </div>
                </section>

            </div>
        </div>
    </main>
    <!-- slider and modal script -->
    <script>
        const sliderTrack = document.querySelector('.slider-track');
        const sliderThumbs = document.querySelectorAll('.slider-thumb');
        const valueDisplay = document.querySelector('.value');

        let angle = 0;

        sliderTrack.addEventListener('mousedown', mousedownHandler);
        sliderTrack.addEventListener('touchstart', mousedownHandler);

        function mousedownHandler(event) {
            document.addEventListener('mousemove', mousemoveHandler);
            document.addEventListener('touchmove', mousemoveHandler);
            document.addEventListener('mouseup', mouseupHandler);
            document.addEventListener('touchend', mouseupHandler);

            const sliderCenterX = sliderTrack.getBoundingClientRect().left + sliderTrack.offsetWidth / 2;
            const sliderCenterY = sliderTrack.getBoundingClientRect().top + sliderTrack.offsetHeight / 2;

            const clientX = event.clientX || event.touches[0].clientX;
            const clientY = event.clientY || event.touches[0].clientY;

            const deltaX = clientX - sliderCenterX;
            const deltaY = clientY - sliderCenterY;

            angle = Math.atan2(deltaY, deltaX) * (180 / Math.PI) + 90;

            moveSliderThumbs(angle);
        }

        function mousemoveHandler(event) {
            const clientX = event.clientX || event.touches[0].clientX;
            const clientY = event.clientY || event.touches[0].clientY;

            const deltaX = clientX - sliderTrack.getBoundingClientRect().left - sliderTrack.offsetWidth / 2;
            const deltaY = clientY - sliderTrack.getBoundingClientRect().top - sliderTrack.offsetHeight / 2;

            angle = Math.atan2(deltaY, deltaX) * (180 / Math.PI) + 90;

            moveSliderThumbs(angle);
        }

        function mouseupHandler() {
            document.removeEventListener('mousemove', mousemoveHandler);
            document.removeEventListener('touchmove', mousemoveHandler);
            document.removeEventListener('mouseup', mouseupHandler);
            document.removeEventListener('touchend', mouseupHandler);
        }

        function moveSliderThumbs(angle) {
            const radius = sliderTrack.offsetWidth / 2;
            const thumbRadius = 25; // Half of thumb width or height

            sliderThumbs.forEach((thumb, index) => {
                const thumbAngle = angle + 90 * index;
                const xPos = radius * Math.cos(thumbAngle * Math.PI / 180) + radius - thumbRadius;
                const yPos = radius * Math.sin(thumbAngle * Math.PI / 180) + radius;
                thumb.style.left = `${xPos}px`;
                thumb.style.top = `${yPos}px`;
                // thumb.style.transform = `rotate(${thumbAngle}deg)`;
            });

            const value = Math.round(angle / 360 * 100); // Calculate value based on angle
            valueDisplay.textContent = 'REST API'; // Update the value display
        }

        function autoMoveSlider() {
            angle += 0.1; // Increment the angle for continuous movement
            // onmouseover()=angle => 0
            moveSliderThumbs(angle);

            // Call the function recursively with a delay
            requestAnimationFrame(autoMoveSlider);
        }

        // Start the automatic movement when the page loads
        document.addEventListener('DOMContentLoaded', () => {
            autoMoveSlider();
        });




        function highlightMenuItem(sectionId) {
            const section = document.getElementById(sectionId);
            section.scrollIntoView({
                behavior: 'smooth'
            });
        }


        // document.addEventListener('scroll', handleScrollSpy);

        const listItems = document.querySelectorAll('.topics li');

        function setActiveItem(item) {
            listItems.forEach((li) => {
                li.classList.remove('active');
            });
            item.classList.add('active');
        }

        listItems.forEach((item) => {
            item.addEventListener('click', () => {
                setActiveItem(item);
            });
        });

        // close modal
        function closeModal() {
            document.getElementById('modal').style.display = 'none';
        }

        // open modal
        function openModal() {
            document.getElementById('modal').style.display = 'grid';
        }
    </script>
</body>
</html>