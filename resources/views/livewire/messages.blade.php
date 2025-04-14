<div class="flex h-screen">
    <x-sidebar active="messages"/>
<div class="flex h-screen">
    <!-- Conversations List -->
    <div class="lg:col-span-1 bg-white shadow-md rounded-xl p-6 overflow-y-auto border-r">
        <h2 class="text-lg font-medium text-gray-700 mb-4">Chats</h2>
        <ul class="space-y-3">
            @foreach ($conversations as $conversation)
                <li wire:click="selectConversation({{ $conversation['id'] }})"
                    class="flex items-center space-x-3 p-3 bg-gray-100 rounded-lg shadow cursor-pointer hover:bg-gray-200">
                    <img src="https://i.pravatar.cc/40?img={{ $conversation['id'] }}" alt="Avatar" class="w-10 h-10 rounded-full">
                    <div class="flex-1">
                        <span class="font-medium text-gray-800">{{ $conversation['name'] }}</span>
                        <p class="text-sm text-gray-600 truncate">{{ $conversation['last_message'] }}</p>
                    </div>
                </li>
            @endforeach
        </ul>
    </div>

    <!-- Chat Window -->
    <div class="lg:col-span-3 bg-white shadow-md rounded-xl p-6 flex flex-col ">
        @if ($selectedConversation)
            <!-- Chat Header -->
            <div class="p-5 bg-white border-b flex items-center space-x-3">
                <img src="https://i.pravatar.cc/40?img={{ $selectedConversation }}" alt="Avatar" class="w-10 h-10 rounded-full">
                <div>
                    <h2 class="text-lg font-medium text-gray-800">Conversation {{ $selectedConversation }}</h2>
                </div>
            </div>

            <!-- Messages -->
            <div class="flex-1 p-6 overflow-y-auto space-y-4 bg-gray-50">
                <!-- Example messages -->
                <div class="flex items-start space-x-3">
                    <img src="https://i.pravatar.cc/40?img=1" alt="Avatar" class="w-8 h-8 rounded-full">
                    <div class="bg-gray-200 p-4 rounded-2xl max-w-xs">
                        <p class="text-sm text-gray-700">Hey! How are you?</p>
                    </div>
                </div>
                <div class="flex items-start space-x-3 justify-end">
                    <div class="bg-blue-500 text-white p-4 rounded-2xl max-w-xs">
                        <p class="text-sm">I'm good! How about you?</p>
                    </div>
                    <img src="https://i.pravatar.cc/40?img=3" alt="Avatar" class="w-8 h-8 rounded-full">
                </div>
            </div>

            <!-- Message Input -->
            <div class="p-4 border-t bg-white flex items-center space-x-3">
                <input type="text" wire:model="message" placeholder="Type a message..."
                    class="flex-1 p-3 border rounded-full focus:ring focus:ring-blue-300 outline-none">
                <button wire:click="sendMessage" class="bg-blue-500 text-white px-5 py-2 rounded-full hover:bg-blue-600 flex items-center space-x-2">
                    <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14.752 11.168l-8.486-4.242a2 2 0 00-2.628 2.628l4.242 8.486a2 2 0 003.708-.002l4.242-8.486a2 2 0 00-1.078-2.384z"></path>
                    </svg>
                    <span>Send</span>
                </button>
            </div>
        @else
            <div class="flex items-center justify-center h-full text-gray-500">
                Select a conversation to start chatting.
            </div>

        @endif

    </div>
</div>
</div>