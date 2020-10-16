<?php
class ApiTeslaEvent
{

    public function __construct($token)
    {
        $this->token = $token;
    }

    public function ApiTesla($type, array $property)
    {
        $url = "https://api.telegram.org/bot" . $this->token . "/" . $type;
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $property);
        $res = curl_exec($ch);
        if (curl_error($ch)) {
            var_dump(curl_error($ch));
        } else {
            return json_decode($res);
        }
    }

    public function getMe()
    {
        return $this->ApiTesla('getMe', [], false);
    }
    public function sendMessage(array $property)
    {
        return $this->ApiTesla('sendMessage', $property);
    }
    public function editMessageText(array $property)
    {
        return $this->ApiTesla('editMessageText', $property);
    }
    public function deleteMessage(array $property)
    {
        return $this->ApiTesla('deleteMessage', $property);
    }
    public function sendPhoto(array $property)
    {
        return $this->ApiTesla('sendPhoto', $property);
    }
    public function sendVideo(array $property)
    {
        return $this->ApiTesla('sendVideo', $property);
    }
    public function sendDocument(array $property)
    {
        return $this->ApiTesla('sendDocument', $property);
    }
    public function forwardMessage(array $property)
    {
        return $this->ApiTesla('forwardMessage', $property);
    }
    public function answerCallbackQuery(array $property)
    {
        return $this->ApiTesla('answerCallbackQuery', $property);
    }
    public function sendVoice(array $property)
    {
        return $this->ApiTesla('sendVoice', $property);
    }
    public function sendAudio(array $property)
    {
        return $this->ApiTesla('sendAudio', $property);
    }
    public function sendAnimation(array $property)
    {
        return $this->ApiTesla('sendAnimation', $property);
    }
    public function sendVideoNote(array $property)
    {
        return $this->ApiTesla('sendVideoNote', $property);
    }
    public function sendMediaGroup(array $property)
    {
        return $this->ApiTesla('sendMediaGroup', $property);
    }
    public function sendLocation(array $property)
    {
        return $this->ApiTesla('sendLocation', $property);
    }
    public function editMessageLiveLocation(array $property)
    {
        return $this->ApiTesla('editMessageLiveLocation', $property);
    }
    public function stopMessageLiveLocation(array $property)
    {
        return $this->ApiTesla('stopMessageLiveLocation', $property);
    }
    public function sendVenue(array $property)
    {
        return $this->ApiTesla('sendVenue', $property);
    }
    public function sendContact(array $property)
    {
        return $this->ApiTesla('sendContact', $property);
    }
    public function sendPoll(array $property)
    {
        return $this->ApiTesla('sendPoll', $property);
    }
    public function sendDice(array $property)
    {
        return $this->ApiTesla('sendDice', $property);
    }
    public function sendChatAction(array $property)
    {
        return $this->ApiTesla('sendChatAction', $property);
    }
    public function getUserProfilePhotos(array $property)
    {
        return $this->ApiTesla('getUserProfilePhotos', $property);
    }
    public function getFile(array $property)
    {
        return $this->ApiTesla('getFile', $property);
    }
    public function kickChatMember(array $property)
    {
        return $this->ApiTesla('kickChatMember', $property);
    }
    public function unbanChatMember(array $property)
    {
        return $this->ApiTesla('unbanChatMember', $property);
    }
    public function restrictChatMember(array $property)
    {
        return $this->ApiTesla('restrictChatMember', $property);
    }
    public function promoteChatMember(array $property)
    {
        return $this->ApiTesla('promoteChatMember', $property);
    }
    public function setChatAdministratorCustomTitle(array $property)
    {
        return $this->ApiTesla('setChatAdministratorCustomTitle', $property);
    }
    public function setChatPermissions(array $property)
    {
        return $this->ApiTesla('setChatPermissions', $property);
    }
    public function exportChatInviteLink(array $property)
    {
        return $this->ApiTesla('exportChatInviteLink', $property);
    }
    public function setChatPhoto(array $property)
    {
        return $this->ApiTesla('setChatPhoto', $property);
    }
    public function deleteChatPhoto(array $property)
    {
        return $this->ApiTesla('deleteChatPhoto', $property);
    }
    public function setChatTitle(array $property)
    {
        return $this->ApiTesla('setChatTitle', $property);
    }
    public function setChatDescription(array $property)
    {
        return $this->ApiTesla('setChatDescription', $property);
    }
    public function pinChatMessage(array $property)
    {
        return $this->ApiTesla('pinChatMessage', $property);
    }
    public function unpinChatMessage(array $property)
    {
        return $this->ApiTesla('unpinChatMessage', $property);
    }
    public function leaveChat(array $property)
    {
        return $this->ApiTesla('leaveChat', $property);
    }
    public function getChat(array $property)
    {
        return $this->ApiTesla('getChat', $property);
    }
    public function getChatAdministrators(array $property)
    {
        return $this->ApiTesla('getChatAdministrators', $property);
    }
    public function getChatMembersCount(array $property)
    {
        return $this->ApiTesla('getChatMembersCount', $property);
    }
    public function getChatMember(array $property)
    {
        return $this->ApiTesla('getChatMember', $property);
    }
    public function setChatStickerSet(array $property)
    {
        return $this->ApiTesla('setChatStickerSet', $property);
    }
    public function deleteChatStickerSet(array $property)
    {
        return $this->ApiTesla('deleteChatStickerSet', $property);
    }
    public function setMyCommands(array $property)
    {
        return $this->ApiTesla('setMyCommands', $property);
    }
    public function getMyCommands(array $property)
    {
        return $this->ApiTesla('getMyCommands', $property);
    }
    public function editMessageCaption(array $property)
    {
        return $this->ApiTesla('editMessageCaption', $property);
    }
    public function editMessageMedia(array $property)
    {
        return $this->ApiTesla('editMessageMedia', $property);
    }
    public function editMessageReplyMarkup(array $property)
    {
        return $this->ApiTesla('editMessageReplyMarkup', $property);
    }
    public function stopPoll(array $property)
    {
        return $this->ApiTesla('stopPoll', $property);
    }
    public function sendSticker(array $property)
    {
        return $this->ApiTesla('sendSticker', $property);
    }
    public function getStickerSet(array $property)
    {
        return $this->ApiTesla('getStickerSet', $property);
    }
    public function uploadStickerFile(array $property)
    {
        return $this->ApiTesla('uploadStickerFile', $property);
    }
    public function MaskPosition(array $property)
    {
        return $this->ApiTesla('MaskPosition', $property);
    }
    public function StickerSet(array $property)
    {
        return $this->ApiTesla('StickerSet', $property);
    }
    public function createNewStickerSet(array $property)
    {
        return $this->ApiTesla('createNewStickerSet', $property);
    }
    public function addStickerToSet(array $property)
    {
        return $this->ApiTesla('addStickerToSet', $property);
    }
    public function setStickerPositionInSet(array $property)
    {
        return $this->ApiTesla('setStickerPositionInSet', $property);
    }
    public function deleteStickerFromSet(array $property)
    {
        return $this->ApiTesla('deleteStickerFromSet', $property);
    }
    public function setStickerSetThumb(array $property)
    {
        return $this->ApiTesla('setStickerSetThumb', $property);
    }
    public function answerInlineQuery(array $property)
    {
        return $this->ApiTesla('answerInlineQuery', $property);
    }
    public function InlineQueryResultArticle(array $property)
    {
        return $this->ApiTesla('InlineQueryResultArticle', $property);
    }
    public function InlineQueryResultPhoto(array $property)
    {
        return $this->ApiTesla('InlineQueryResultPhoto', $property);
    }
    public function InlineQueryResultGif(array $property)
    {
        return $this->ApiTesla('InlineQueryResultGif', $property);
    }
    public function InlineQueryResultMpeg4Gif(array $property)
    {
        return $this->ApiTesla('InlineQueryResultMpeg4Gif', $property);
    }
    public function InlineQueryResultVideo(array $property)
    {
        return $this->ApiTesla('InlineQueryResultVideo', $property);
    }
    public function InlineQueryResultAudio(array $property)
    {
        return $this->ApiTesla('InlineQueryResultAudio', $property);
    }
    public function InlineQueryResultVoice(array $property)
    {
        return $this->ApiTesla('InlineQueryResultVoice', $property);
    }
    public function InlineQueryResultDocument(array $property)
    {
        return $this->ApiTesla('InlineQueryResultDocument', $property);
    }
    public function InlineQueryResultLocation(array $property)
    {
        return $this->ApiTesla('InlineQueryResultLocation', $property);
    }
    public function InlineQueryResultVenue(array $property)
    {
        return $this->ApiTesla('InlineQueryResultVenue', $property);
    }
    public function InlineQueryResultContact(array $property)
    {
        return $this->ApiTesla('InlineQueryResultContact', $property);
    }
    public function InlineQueryResultGame(array $property)
    {
        return $this->ApiTesla('InlineQueryResultGame', $property);
    }
    public function InlineQueryResultCachedPhoto(array $property)
    {
        return $this->ApiTesla('InlineQueryResultCachedPhoto', $property);
    }
    public function sendInvoice(array $property)
    {
        return $this->ApiTesla('sendInvoice', $property);
    }
    public function answerShippingQuery(array $property)
    {
        return $this->ApiTesla('answerShippingQuery', $property);
    }
    public function answerPreCheckoutQuery(array $property)
    {
        return $this->ApiTesla('answerPreCheckoutQuery', $property);
    }
    public function sendGame(array $property)
    {
        return $this->ApiTesla('sendGame', $property);
    }
    public function setGameScore(array $property)
    {
        return $this->ApiTesla('setGameScore', $property);
    }
    public function getGameHighScores(array $property)
    {
        return $this->ApiTesla('getGameHighScores', $property);
    }

    public function Input($boolean = false)
    {
        $get = file_get_contents("php://input");
        return json_decode($get, $boolean);
    }
}
    $ApiTesla = new ApiTeslaEvent(file_get_contents("ApiTesla-token.txt"));
}

/*
 mysql database class
 */
class db extends mysqli
{

    public function Insert($tbl, array $data)
    {
        foreach ($data as $key => $value) {
            $keys = $keys . $key . ", ";
            $values = $values . "'" . $value . "', ";
        }
        $k = substr($keys, 0, -2);
        $v = substr($values, 0, -2);
        $this->query("INSERT INTO $tbl ($k) VALUES ($v) ");
    }

    public function Update($tbl, array $data, array $whr = null)
    {
        foreach ($data as $key => $value) {
            $set = $set . $key . ' = ' . "'" . $value . "', ";
        }
        $s = substr($set, 0, -2);
        if ($whr != null) {
            foreach ($whr as $v => $i) {
                $wh = $v . ' = ' . "'" . $i . "'";
            }
            $this->query("UPDATE $tbl SET $s WHERE $wh ");
        } else {
            $this->query("UPDATE $tbl SET $s ");
        }
    }

    public function Delete($tbl, array $whr)
    {
        foreach ($whr as $key => $value) {
            $wh = $wh . $key . ' = ' . "'" . $value . "', ";
        }
        $w = substr($wh, 0, -2);
        $this->query("DELETE FROM $tbl WHERE $w ");
    }
    public function Select($tbl, array $whr = null, $row = null)
    {
        $r = $row ?: "*";
        if ($whr != null) {
            foreach ($whr as $ro => $qu) {
                $wh = $wh . $ro . " = '" . $qu . "', ";
            }
            $w = substr($wh, 0, -2);
            return $this->query("SELECT $r FROM $tbl WHERE $w ");
        } else {
            return $this->query("SELECT $r FROM $tbl");
        }
    }
    public function NumRows($select)
    {
        return mysqli_num_rows($select);
    }
}
/*
 set to arrays
 */
function objectToArrays($object)
{
    if (!is_object($object) && !is_array($object)) {
        return $object;
    }
    if (is_object($object)) {
        $object = get_object_vars($object);
    }
    return array_map("objectToArrays", $object);
}
/*
 check command
 */
function Cmd($cmd)
{
    global $ApiTesla;
    $text = $ApiTesla->Input()->message->text;
    if ($text == $cmd) {
        return true;
    }
}
/*
 check data query
 */
function dataQuery($query)
{
    global $ApiTesla;
    $data = $ApiTesla->Input()->callback_query->data;
    if ($data == $query) {
        return true;
    }
}
/*
 make simple keyboard
 */
function makeKeyboard(array $key)
{
    return json_encode(['resize_keyboard' => true,
        'keyboard' =>
            $key
    ]);
}
/*
 make inline keyboard
 */
function makeInlineKeyboard(array $key)
{
    return json_encode(['resize_keyboard' => true,
        'inline_keyboard' =>
            $key
    ]);
}
/*
 start command bot
 */
function Start()
{
    global $ApiTesla;
    $text = $ApiTesla->Input()->message->text;
    if (preg_match('/^[\/]?([Ss][Tt][Aa][Rr][Tt])$/i', $text)) {
        return true;
    }
}
/*
 check join in your channel
 */
function checkJoin($chnl, $from_id)
{
    $token = file_get_contents("ApiTesla-token.txt");
    $forchannel = json_decode(file_get_contents("https://api.telegram.org/bot$token/getChatMember?chat_id=$chnl&user_id=" . $from_id));
    $tch = $forchannel->result->status;
    if ($tch != 'creator' and $tch != 'member' and $tch != 'administrator') {
        return true;
    }
}

/*
 check data
 */
function checkData($get, $array, $query)
{
    if ($get[$array] == $query) {
        return true;
    }
}
/*
 run bot
 */
if (empty($_POST) and !$_GET) {
    if (file_get_contents("ApiTesla-webhook.txt") != "true") {
        echo "<form action='index.php' method='post'><input type='text' name='token' placeholder='your Token ...'><input type='submit' value='go'></form>";
    } else {
        echo "<b>Bot is already running</b>";
    }
}
if ($_POST['token']) {
    $info = json_decode(file_get_contents('https://api.telegram.org/bot' . $_POST['token'] . '/getwebhookinfo'));
    $result = objectToArrays($info);
    if ($result['ok'] == true) {
        echo "<b>Bot is Running</b>";
        $get = file_get_contents("https://api.telegram.org/bot" . $_POST['token'] . "/setwebhook?url=" . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']);
        $ApiTesla = new ApiTeslaEvent($_POST['token']);
        file_put_contents("ApiTesla-webhook.txt", "true");
        file_put_contents("ApiTesla-token.txt", $_POST['token']);
    } else {
        echo "<form action='index.php' method='post'><input type='text' name='token' placeholder='your token ...'><input type='submit' value='go'></form>";
        echo "<b>Error : token failed</b>";
    }
}
