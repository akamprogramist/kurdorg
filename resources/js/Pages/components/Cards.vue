<template>
    <div class="p-5 my-10">
        <p class="text-3xl text-center text-slate-700 mb-5 font-bold">
            Be a Business Partner
        </p>
        <div class="flex overflow-auto snap-x">
            <router-link
                to="/bepartner-page"
                v-for="(i, index) in 3"
                :key="index"
                class="m-5 rounded-lg min-w-[75%] snap-start hover:shadow-3xl duration-300 md:min-w-[25%]"
            >
                <article
                    class="overflow-hidden rounded-lg border border-gray-100 shadow-sm"
                >
                    <img
                        alt="Office"
                        src="https://images.unsplash.com/photo-1600880292203-757bb62b4baf?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1770&q=80"
                        class="h-56 w-full object-cover"
                    />

                    <div class="p-4 sm:p-6">
                        <a href="#">
                            <h3 class="text-xl font-bold text-gray-900">
                                Lorem ipsum dolor
                            </h3>
                        </a>

                        <p
                            class="mt-2 text-sm leading-relaxed text-gray-500 line-clamp-3"
                        >
                            Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Recusandae dolores, possimus pariatur animi
                            temporibus nesciunt praesentium dolore sed nulla
                            ipsum eveniet corporis quidem, mollitia itaque minus
                        </p>

                        <a
                            href="#"
                            class="group mt-4 inline-flex gap-1 text-sm font-medium text-green-600"
                        >
                            Find out more

                            <span
                                aria-hidden="true"
                                class="block transition group-hover:translate-x-1"
                            >
                                &rarr;
                            </span>
                        </a>
                    </div>
                </article>
            </router-link>
        </div>
    </div>
    <!--
  This component uses @tailwindcss/line-clamp

  yarn add @tailwindcss/line-clamp
  npm install @tailwindcss/line-clamp

  plugins: [require('@tailwindcss/line-clamp')]
--></template>
