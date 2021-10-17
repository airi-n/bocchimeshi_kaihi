<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>SkyWay - Room example</title>
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <script src="https://cdn.webrtc.ecl.ntt.com/skyway-4.4.1.js"></script>
  </head>
  <body>
    <div class="container">
      <h1 class="heading">Room example</h1>
      <p class="note">
        Change Room mode (before join in a room):
        <a href="#">mesh</a> / <a href="#sfu">sfu</a>
      </p>
      <div class="room">
        <div>
          <video id="js-local-stream"></video>
          <span id="js-room-mode"></span>:
          <input type="text" placeholder="Room Name" id="js-room-id">
          <button id="js-join-trigger">Join</button>
          <button id="js-leave-trigger">Leave</button>
        </div>

        <div class="remote-streams" id="js-remote-streams"></div>

        <div>
          <pre class="messages" id="js-messages"></pre>
          <input type="text" id="js-local-text">
          <button id="js-send-trigger">Send</button>
        </div>
      </div>
      <p class="meta" id="js-meta"></p>
    </div>
    <!-- <script src="//cdn.webrtc.ecl.ntt.com/skyway-4.4.1.js"></script> -->
    <!-- <script src="../_shared/key.js"></script> -->
    <script src="{{ asset('/js/script.js') }}"></script>
  </body>
</html>