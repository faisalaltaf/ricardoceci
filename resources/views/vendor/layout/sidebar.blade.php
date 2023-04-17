<style>
  a{
    color: black;
    text-decoration: none;
  }

  @media (min-width: 48em) { .Polaris-Navigation__Text { font-size: var(--p-font-size-300); }}
  .Polaris-Button__Content {
    font-size: var(--p-font-size-200);}
    .Polaris-Navigation__ListItem {
    position: relative;
    display: flex;
    flex-wrap: wrap;
    padding: 3px;
}
</style>
<div aria-label="Navigation" class="Polaris-Frame__Navigation" id="AppFrameNav">
          <nav class="Polaris-Navigation">
            <div class="Polaris-Navigation__LogoContainer">
              <a class="Polaris-Navigation__LogoLink" style="width:124px" href="http://jadedpixel.com" data-polaris-unstyled="true">
                <img alt="Jaded Pixel" src="https://cdn.shopify.com/s/files/1/0446/6937/files/jaded-pixel-logo-color.svg?6215648040070010999" class="Polaris-Navigation__Logo" style="width:124px">
                </a>
              </div>
              <div class="Polaris-Navigation__PrimaryNavigation Polaris-Scrollable Polaris-Scrollable--vertical Polaris-Scrollable--horizontal" data-polaris-scrollable="true">
                <ul class="Polaris-Navigation__Section">
                  <li class="Polaris-Navigation__ListItem ">
                
                  </li>
                </ul>
                <ul class="Polaris-Navigation__Section Polaris-Navigation__Section--withSeparator">
             
                  <li class="Polaris-Navigation__ListItem">
                    <button type="button" class="Polaris-Navigation__Item">
                    

                   
                    <div class="Polaris-Navigation__Icon">
                    <a href="{{route('home')}}">
                        <span class="Polaris-Icon">
                          <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--regular Polaris-Text--visuallyHidden">
                          </span>
                          <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                            <path d="M18 7.261v10.239c0 .841-.672 1.5-1.5 1.5h-2c-.828 0-1.5-.659-1.5-1.5v-4.5h-6v4.477c0 .841-.672 1.523-1.5 1.523h-2c-.828 0-1.5-.682-1.5-1.523v-10.216a1.5 1.5 0 0 1 .615-1.21l6.59-4.82a1.481 1.481 0 0 1 1.59 0l6.59 4.82a1.5 1.5 0 0 1 .615 1.209z">
                            </path>
                          </svg>
                        </span>
                      </div>
                      <span class="Polaris-Navigation__Text">Home</span>
                      </a> 
                    </button>
                  </li>
                  <li class="Polaris-Navigation__ListItem">
                    <button type="button" class="Polaris-Navigation__Item">
                      <div class="Polaris-Navigation__Icon">
                      <a class="Polaris-Navigation__LogoLink"  href="{{route('datasources')}}">

                        <span class="Polaris-Icon">
                          <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--regular Polaris-Text--visuallyHidden">
                          </span>
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20">
<path d="M4 7C4.55228 7 5 7.44772 5 8L5 16C5 16.5523 4.55229 17 4 17C3.44772 17 3 16.5523 3 16L3 8C3 7.44772 3.44772 7 4 7Z" fill="#5C5F62"/>
<path d="M8 11C8.55228 11 9 11.4477 9 12V16C9 16.5523 8.55228 17 8 17C7.44772 17 7 16.5523 7 16V12C7 11.4477 7.44772 11 8 11Z" fill="#5C5F62"/>
<path d="M12 3C12.5523 3 13 3.44772 13 4L13 16C13 16.5523 12.5523 17 12 17C11.4477 17 11 16.5523 11 16L11 4C11 3.44772 11.4477 3 12 3Z" fill="#5C5F62"/>
<path d="M16 7C16.5523 7 17 7.44772 17 8V16C17 16.5523 16.5523 17 16 17C15.4477 17 15 16.5523 15 16V8C15 7.44772 15.4477 7 16 7Z" fill="#5C5F62"/>
</svg>
                        </span>
                      </div>
                      <span class="Polaris-Navigation__Text">Data Source</span>
                      </a>
                    </button>
                  </li>
                  <li class="Polaris-Navigation__ListItem">
                    <button type="button" class="Polaris-Navigation__Item">
                      <div class="Polaris-Navigation__Icon">
                      <a class="Polaris-Navigation__LogoLink"  href="{{route('smartcart')}}">

                        <span class="Polaris-Icon">
                          <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--regular Polaris-Text--visuallyHidden">
                          </span>
                          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path fill-rule="evenodd" d="M1 1c0-.552.45-1 1.004-1h1.505c.831 0 1.505.672 1.505 1.5v.56l12.574.908c.877.055 1.52.843 1.397 1.71l-.866 6.034A1.504 1.504 0 0116.63 12H5.014v2h10.043a3.005 3.005 0 013.011 3c0 1.657-1.348 3-3.01 3a3.005 3.005 0 01-2.84-4H6.85a3.005 3.005 0 01-2.84 4A3.005 3.005 0 011 17c0-1.306.838-2.418 2.007-2.83V3.01 2H2.004A1.002 1.002 0 011 1zm4.014 3.064V10h11.18l.727-5.07-11.907-.866zM14.054 17c0-.552.449-1 1.003-1 .554 0 1.004.448 1.004 1s-.45 1-1.004 1a1.002 1.002 0 01-1.003-1zM3.007 17c0-.552.45-1 1.004-1s1.003.448 1.003 1-.449 1-1.003 1a1.002 1.002 0 01-1.004-1z" fill="#5C5F62"/></svg>
                        </span>
                      </div>
                      <span class="Polaris-Navigation__Text">Smart Cart</span>
                      </a>
                    </button>
                  </li>
                </ul>
              </div>
            </nav>
            <button type="button" class="Polaris-Frame__NavigationDismiss" aria-hidden="true" aria-label="Close navigation" tabindex="-1">
              <span class="Polaris-Icon">
                <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--regular Polaris-Text--visuallyHidden">
                </span>
                <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                  <path d="m11.414 10 6.293-6.293a1 1 0 1 0-1.414-1.414l-6.293 6.293-6.293-6.293a1 1 0 0 0-1.414 1.414l6.293 6.293-6.293 6.293a1 1 0 1 0 1.414 1.414l6.293-6.293 6.293 6.293a.998.998 0 0 0 1.707-.707.999.999 0 0 0-.293-.707l-6.293-6.293z">
                  </path>
                </svg>
              </span>
            </button>
          </div>