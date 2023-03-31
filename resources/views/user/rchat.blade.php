                            @foreach($data as $dat)
                            @if($dat->user=='admin')
                            <div class="media media-chat">
                              <div class="media-body">
                              <p>{{$dat->message}}</p>
                              <!-- <p class="meta"><time datetime="2018">00:12</time></p> -->
                              </div>
                            </div>
                            @else
                            <div class="media media-chat media-chat-reverse">
                              <div class="media-body">
                                <p>{{$dat->message}}</p>
                                <!-- <p class="meta"><time datetime="2018">00:12</time></p> -->
                              </div>
                            </div>
                            @endif
                            @endforeach