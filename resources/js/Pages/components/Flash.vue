<template>
    <div class="flex justify-center">
        <div
            v-if="$page.props.flash.message"
            class="alert p-4 m-6 text-sm text-green-800 rounded-lg bg-green-50"
            role="alert"
        >
            <span class="font-medium">{{ $page.props.flash.message }}</span>
        </div>
    </div>
</template>
<script setup></script>
