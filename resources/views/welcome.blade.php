<x-header></x-header>

<body class="bg-gray-100 font-sans">

    <!-- Navbar -->
    <x-navbar></x-navbar>

    <div class="container mx-auto flex mt-6 space-x-6">

    <!-- Left Sidebar -->
    <x-leftsidebar></x-leftsidebar>

        <!-- Main Content -->
        <main class="w-2/4 p-6">
        
        <!-- Today's Important Matches -->
        <x-livegames></x-livegames>
        
        <!-- Recent Match Results -->
        <x-post></x-post>

        </main>

        <!-- Right Sidebar -->
        <x-rightsidebar></x-rightsidebar>

    </div>

    <x-footer></x-footer>

</body>

</html>