<template>
    <div class="py-5">
        <!-- <p class="text-3xl text-center text-slate-700 mb-5 font-bold">
            Be a Business Partner
        </p> -->
        <div class="grid md:grid-cols-3 gap-6">
            <a
                href="/bepartner-page"
                v-for="(i, index) in 1"
                :key="index"
                class="rounded-lg hover:shadow-3xl duration-300"
            >
                <article class="rounded-lg border border-gray-10">
                    <img
                        alt="Office"
                        src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                        class="rounded-t-lg h-56 w-full object-cover"
                    />

                    <div class="p-4 sm:p-6">
                        <a href="#">
                            <h3 class="text-2xl font-bold text-gray-900">
                                Lorem ipsum dolor
                            </h3>
                        </a>

                        <p
                            class="my-4 text-sm leading-relaxed text-gray-500 line-clamp-3"
                        >
                            Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Recusandae dolores, possimus pariatur animi
                            temporibus nesciunt praesentium dolore sed nulla
                            ipsum eveniet corporis quidem, mollitia itaque minus
                        </p>

                        <a
                            href="#"
                            class="group mt-6 flex gap-1 text-sm font-medium justify-between text-bluesh items-center"
                        >
                            <Button
                                class="bg-bluesh hover:bg-yellowsh text-base rounded-none py-2 px-6"
                            >
                                View More
                            </Button>
                            <i
                                class="fa-regular fa-heart text-xl hover:text-yellowsh"
                            ></i>
                        </a>
                    </div>
                </article>
            </a>
        </div>
    </div>
</template>

<script setup>
import Button from "./Button.vue";
</script>
