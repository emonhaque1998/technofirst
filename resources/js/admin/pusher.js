import Pusher from "pusher-js";
import { PUSHER_APP_KEY, CULSTER } from "./config";

const pusher = new Pusher(PUSHER_APP_KEY, {
    cluster: CULSTER,
});

const channelSub = pusher.subscribe("my-channel");

channelSub.bind("my-event", function (data) {
    console.log("Received data:", data);
});
