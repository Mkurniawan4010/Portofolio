@extends('layout')

@section('title', 'Contact - Get In Touch')

@section('content')
<section class="py-16">
    <div class="max-w-4xl mx-auto px-4">
        <h1 class="text-5xl font-bold text-center mb-4 text-white animate-on-scroll">Get In Touch</h1>
        <p class="text-center text-gray-400 mb-12 text-lg animate-on-scroll delay-200">
            Have a project in mind? Let's talk about it!
        </p>

        <div class="grid md:grid-cols-2 gap-12">
            <!-- Contact Info -->
            <div class="animate-on-scroll delay-300">
                <h2 class="text-2xl font-bold mb-6 text-white">Contact Information</h2>

                <div class="gradient-border p-4 mb-6 hover-lift">
                    <h3 class="text-lg font-semibold flex items-center gap-3 mb-2 text-white">
                        <i class="fas fa-envelope text-blue-500 text-2xl"></i>
                        Email
                    </h3>
                    <p class="text-gray-400">your.email@example.com</p>
                </div>

                <div class="gradient-border p-4 mb-6 hover-lift">
                    <h3 class="text-lg font-semibold flex items-center gap-3 mb-2 text-white">
                        <i class="fas fa-phone text-blue-500 text-2xl"></i>
                        Phone
                    </h3>
                    <p class="text-gray-400">+62 123 4567 8901</p>
                </div>

                <div class="gradient-border p-4 mb-6 hover-lift">
                    <h3 class="text-lg font-semibold flex items-center gap-3 mb-2 text-white">
                        <i class="fas fa-map-marker-alt text-blue-500 text-2xl"></i>
                        Location
                    </h3>
                    <p class="text-gray-400">Jakarta, Indonesia</p>
                </div>

                <div>
                    <h3 class="text-lg font-semibold mb-4 text-white">Follow Me</h3>
                    <div class="flex gap-4">
                        <a href="#" class="text-3xl text-gray-500 hover:text-blue-400 transition hover-lift">
                            <i class="fab fa-github"></i>
                        </a>
                        <a href="#" class="text-3xl text-gray-500 hover:text-blue-400 transition hover-lift">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="#" class="text-3xl text-gray-500 hover:text-blue-400 transition hover-lift">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="#" class="text-3xl text-gray-500 hover:text-blue-400 transition hover-lift">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </div>
                </div>
            </div>

            <!-- Contact Form -->
            <div class="gradient-border p-8 hover-lift animate-on-scroll delay-400">
                <h2 class="text-2xl font-bold mb-6 text-white">Send Me a Message</h2>

                <form action="#" method="POST" class="space-y-4">
                    @csrf

                    <div>
                        <label class="block text-sm font-semibold mb-2 text-gray-300">Your Name</label>
                        <input type="text" name="name" required
                            class="w-full px-4 py-2 bg-gray-800/50 border border-gray-700 rounded focus:outline-none focus:border-blue-500 text-white"
                            placeholder="John Doe">
                    </div>

                    <div>
                        <label class="block text-sm font-semibold mb-2 text-gray-300">Email Address</label>
                        <input type="email" name="email" required
                            class="w-full px-4 py-2 bg-gray-800/50 border border-gray-700 rounded focus:outline-none focus:border-blue-500 text-white"
                            placeholder="john@example.com">
                    </div>

                    <div>
                        <label class="block text-sm font-semibold mb-2 text-gray-300">Subject</label>
                        <input type="text" name="subject" required
                            class="w-full px-4 py-2 bg-gray-800/50 border border-gray-700 rounded focus:outline-none focus:border-blue-500 text-white"
                            placeholder="Project Inquiry">
                    </div>

                    <div>
                        <label class="block text-sm font-semibold mb-2 text-gray-300">Message</label>
                        <textarea name="message" rows="5" required
                            class="w-full px-4 py-2 bg-gray-800/50 border border-gray-700 rounded focus:outline-none focus:border-blue-500 text-white resize-none"
                            placeholder="Your message here..."></textarea>
                    </div>

                    <button type="submit" class="w-full px-8 py-3 rounded-lg font-semibold transition hover-lift glow-blue bg-gradient-to-r from-blue-600 to-blue-700 text-white">
                        Send Message
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection