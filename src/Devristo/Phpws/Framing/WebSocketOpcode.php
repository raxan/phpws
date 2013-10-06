<?php
/**
 * Created by JetBrains PhpStorm.
 * User: chris
 * Date: 10/6/13
 * Time: 5:41 PM
 * To change this template use File | Settings | File Templates.
 */
namespace Devristo\Phpws\Framing;
/**
 * Enum-like construct containing all opcodes defined in the WebSocket protocol
 * @author Chris
 *
 */
class WebSocketOpcode
{

    const __default = 0;
    const ContinuationFrame = 0x00;
    const TextFrame = 0x01;
    const BinaryFrame = 0x02;
    const CloseFrame = 0x08;
    const PingFrame = 0x09;
    const PongFrame = 0x09;

    private function __construct()
    {

    }

    /**
     * Check if a opcode is a control frame. Control frames should be handled internally by the server.
     * @param int $type
     */
    public static function isControlFrame($type)
    {
        $controlframes = array(self::CloseFrame, self::PingFrame, self::PongFrame);

        return array_search($type, $controlframes) !== false;
    }

}