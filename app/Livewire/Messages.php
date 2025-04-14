<?php

namespace App\Livewire;

use Livewire\Component;

class Messages extends Component
{
    public $conversations = [];
    public $selectedConversation = null;
    public $message = '';

    public function mount()
    {
        // Load initial conversations (replace with actual data fetching logic)
        $this->conversations = [
            ['id' => 1, 'name' => 'John Doe', 'last_message' => 'Hey! How are you?'],
            ['id' => 2, 'name' => 'Jane Smith', 'last_message' => 'Let’s schedule a meeting.'],
        ];
    }

    public function selectConversation($conversationId)
    {
        $this->selectedConversation = $conversationId;
        // Load messages for the selected conversation (replace with actual data fetching logic)
    }

    public function sendMessage()
    {
        if ($this->message) {
            // Logic to send the message (e.g., save to database)
            $this->message = ''; // Clear the input field
        }
    }

    public function render()
    {
        return view('livewire.messages');
    }
}
