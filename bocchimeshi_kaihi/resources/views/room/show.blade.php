<head>
   
</head>
<body>
     <script src="{{ asset('/js/sample.js') }}"></script> 
      <div class="container" align="center">
        <!-- <div class="Headline">
          <img src="{{ asset('/img/ぼっち飯回避.jpg') }}"/>
        </div>   -->
        <div class="room">
          <video id="js-local-stream" autoplay loop  height="360"></video>
        </div>
        <div class="remote-streams" id="js-remote-streams"></div>
        <p>{{$id}}</p>
        <div>
            <input type="hidden" id="js-room-id" value="{{$id}}">
            <button id="js-join-trigger" class=btn>
              開始
            </button>
            <button id="js-leave-trigger">Leave</button>
        </div>
      </div>
      <p class="meta" id="js-meta"></p>
    </div>
    <script src="{{ asset('/js/script.js') }}"></script> -->
   
  <!-- <div id="myIdDisp"></div>
  <div id="desc"></div>
  <button id="autoJoinButton">自動入室</button>
  <div id="roomList"></div>
  <div id="logList"></div> -->
</body>