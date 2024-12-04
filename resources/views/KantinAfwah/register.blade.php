<form method="POST" action="{{ route('register') }}">
    @csrf

    <div>
        <label for="name" class="block text-sm font-medium text-gray-700">Name</label>
        <input id="name" name="name" type="text" required autofocus class="mt-1 block w-full">
    </div>

    <div>
        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
        <input id="email" name="email" type="email" required class="mt-1 block w-full">
    </div>

    <div>
        <label for="password" class="block text-sm font-medium text-gray-700">Password</label>
        <input id="password" name="password" type="password" required class="mt-1 block w-full">
    </div>

    <div>
        <button type="submit" class="btn btn-primary mt-4">Register</button>
    </div>
</form>
