<section class="u-align-left u-clearfix u-section-8" id="carousel_93df">
      <div class="u-clearfix u-sheet u-valign-middle-lg u-valign-middle-md u-valign-middle-sm u-valign-middle-xl u-sheet-1" id="opinions">
        <div class="data-layout-selected u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-col">
              <div class="u-size-30">
                <div class="u-layout-row">
                  <div class="u-container-style u-layout-cell u-size-30 u-layout-cell-1">
                    <div class="u-container-layout u-container-layout-1">
                      <div class="u-layout-grid u-list u-list-1">
                      <h3 class="u-text u-text-default u-text-palette-2-base u-text-8">Vélemények ({{count($comments)}})</h3>
                        <div class="u-repeater u-repeater-1">
                          @if(count($comments) != null)
                          @foreach($comments as $comment)
                          <div class="u-container-style u-list-item u-radius-25 u-repeater-item u-shape-round u-white u-list-item-1" data-animation-name="customAnimationIn" data-animation-duration="1500" data-animation-delay="500">
                            <div class="u-container-layout u-similar-container u-container-layout-2"><span class="u-align-left u-icon u-icon-circle u-text-palette-4-base u-icon-1"><svg class="u-svg-link" preserveAspectRatio="xMidYMin slice" viewBox="0 0 351.128 351.128" style=""><use xlink:href="#svg-05d2"></use></svg><svg class="u-svg-content" viewBox="0 0 351.128 351.128" x="0px" y="0px" id="svg-05d2" style="enable-background:new 0 0 351.128 351.128;"><g><path d="M72.326,147.33c4.284-26.928,37.944-55.692,64.26-56.304c1.836,0,3.672-0.612,4.896-1.836   c1.224-0.612,2.448-1.224,3.06-3.06c9.18-17.136,4.284-30.6-11.016-41.616c-17.748-12.852-45.9,0-59.976,11.628   C38.054,85.518,1.946,136.313,3.782,184.662c-6.12,32.437-4.896,67.32,4.284,96.084c6.12,18.36,23.868,27.54,42.228,28.764   c18.36,1.225,56.304,6.732,72.828-4.283c16.524-11.017,17.748-32.437,19.584-50.796c1.836-20.196,7.344-58.141-9.792-74.053   C115.778,165.078,66.818,181.602,72.326,147.33z"></path><path d="M274.286,147.33c4.284-26.928,37.943-55.692,64.26-56.304c1.836,0,3.672-0.612,4.896-1.836   c1.225-0.612,2.448-1.224,3.061-3.06c9.18-17.136,4.284-30.6-11.016-41.616c-17.748-12.852-45.9,0-59.977,11.628   c-35.496,29.376-71.604,80.172-69.768,128.52c-6.12,32.437-4.896,67.32,4.283,96.084c6.12,18.36,23.868,27.54,42.229,28.764   c18.36,1.225,56.304,6.732,72.828-4.283c16.523-11.017,17.748-32.437,19.584-50.796c1.836-20.196,7.344-58.141-9.792-74.053   C317.738,165.078,268.166,181.602,274.286,147.33z"></path>
</g></svg></span>
                              <p class="u-align-left u-text u-text-1">{{$comment->comment}}</p>
                              <h5 class="u-align-left u-custom-font u-text u-text-font u-text-2">{{$comment->name}}</h5>
                              @if(!empty(auth()->user()))
                                <span>
                                  <i>Email címe: {{$comment->email}}</i>
                                </span>
                              @endif
                            </div>
                          </div>
                          @endforeach
                          @else
                          <h4 class="u-align-center">Nem található komment</h4>
                          @endif
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="u-align-center u-container-align-center u-container-style u-layout-cell u-palette-2-light-3 u-size-30 u-layout-cell-2">
                    <div class="u-container-layout u-container-layout-5">
                      <h3 class="u-align-center u-text u-text-default u-text-palette-4-base u-text-7">Vélemények</h3>
                      <div class="u-image u-image-circle u-image-1" data-image-width="1536" data-image-height="2048" style="background-image: url(' {{ asset("img/profile.jpg") }}')" ;></div>
                    </div>
                  </div>
                </div>
              </div>
              <form action="addComment" method="post">
              @csrf
              <div class="u-size-30">
                <div class="u-layout-row">
                  <div class="u-container-style u-layout-cell u-size-60 u-white u-layout-cell-3">
                    <div class="u-container-layout u-valign-top u-container-layout-6">
                      <h2 class="u-text u-text-default u-text-palette-2-base u-text-8">Mond el a véleményed!</h2>
                      <div class="u-expanded-width-sm u-expanded-width-xs u-form u-form-1">
                        <form action="https://forms.nicepagesrv.com/v2/form/process" class="u-clearfix u-form-spacing-10 u-form-vertical u-inner-form" source="email" name="form" style="padding: 0px;">
                          <div class="u-form-group u-form-name">
                            <label for="name-513e" class="u-label">Name</label>
                            <input type="text" placeholder="Neved" id="name-513e" name="user_name" class="u-border-none u-grey-5 u-input u-input-rectangle" required="">
                          </div>
                          <div class="u-form-email u-form-group">
                            <label for="email-513e" class="u-label">Email</label>
                            <input type="email" placeholder="Email cím" id="email-513e" name="user_email" class="u-border-none u-grey-5 u-input u-input-rectangle" required="">
                          </div>
                          <div class="u-form-group u-form-message">
                            <label for="message-513e" class="u-label">Message</label>
                            <textarea placeholder="A véleményed" rows="4" cols="50" id="message-513e" name="user_comment" class="u-border-none u-grey-5 u-input u-input-rectangle" required=""></textarea>
                          </div>
                          <div class="u-align-left u-form-group u-form-submit" style="text-align: center;">
                            <a href="#" class="u-border-none u-btn u-btn-submit u-button-style u-hover-palette-2-base u-palette-3-base u-btn-1" style="padding: 15px; border-radius: 5px;">Küldés </a>
                            <input type="submit" value="submit" class="u-form-control-hidden">
                          </div>
                          <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
                          <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
                          <input type="hidden" value="" name="recaptchaResponse">
                          <input type="hidden" name="formServices" value="1292606a-7d72-7abf-5691-b5403d244d61">
                        </form>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>