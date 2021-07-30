<?php

namespace Tests\Unit;

use Tests\TestCase;
use App\Models\ChatRoom;
use App\Models\ChatMessage;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Schema;

class ChatTest extends TestCase
{
    public function test_index_chat()
    {
        $response = $this->get('/chat');
        $response->assertOk();
    }
    public function test_a_chatRom_hasMany_chat()
    {
        $chatRoom = new ChatRoom;
        $this->assertInstanceOf(Collection::class, $chatRoom->messages);
    }
    public function test_a_messages_hasOne_chat()
    {
        $chatMsg = new ChatMessage;
        $chatRoom = new ChatRoom;
        $this->assertTrue(
            Schema::hasColumn('chat_messages', 'chat_room_id')
        );
        $this->assertEquals($chatMsg->room, $chatRoom->id);
    }
}
