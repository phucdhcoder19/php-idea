<x-layout>
    <x-form title="Register an account" description="Create an account to get started">
        <form action="/register" method="POST" class="mt-10 space-y-4">
            @csrf
            <x-form.field name="name" label="Name" />
            <x-form.field name="email" label="Email" />
            <x-form.field name="password" label="Password" type="password" />
            <button type="submit" class="btn h-10 w-full mt-2">Create Account</button>
        </form>
        <p class="text-sm text-center mt-4">
            Already have an account? <a href="/login" class="text-blue-500">Login</a>
        </p>
    </x-form>
</x-layout>
