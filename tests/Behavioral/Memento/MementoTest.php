<?php

namespace Kuriv\PHPDesignPatterns\Behavioral\Memento;

use PHPUnit\Framework\TestCase;

class MementoTest extends TestCase
{
    public function testOpenTicketAssignAndSetBackToOpen()
    {
        $ticket = new Ticket;
        $ticket->open();
        $this->assertSame(State::STATE_OPENED, (string) $ticket->getState());

        $memento = $ticket->saveToMemento();
        $ticket->assign();
        $this->assertSame(State::STATE_ASSIGNED, (string) $ticket->getState());

        $ticket->restoreFromMemento($memento);
        $this->assertSame(State::STATE_OPENED, (string) $ticket->getState());
    }
}
