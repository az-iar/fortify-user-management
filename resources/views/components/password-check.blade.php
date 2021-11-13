<div x-data="{password: '{{ $password }}'">
    <p x-if="password.length < 4" class="text-sm text-red-600 mt-1">Your password is too weak!</p>
    <p x-if="password.length < 6" class="text-sm text-yellow-600 mt-1">Try a longer password</p>
    <p x-if="password.length > 8" class="text-sm text-green-600 mt-1">Your password is strong</p>
</div>