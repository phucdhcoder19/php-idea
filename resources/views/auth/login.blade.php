<x-layout>
    <x-form title="Login to your account" description="Login to your account to continue">
        <form action="/login" method="POST" class="mt-10 space-y-4">
            @csrf
            <x-form.field name="email" label="Email" />
            <x-form.field name="password" label="Password" type="password" />
            <button type="submit" class="btn h-10 w-full mt-2">Login</button>
        </form>
    </x-form>
</x-layout>
