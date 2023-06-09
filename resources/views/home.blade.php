
@extends('shopify-app::layouts.default')

@section('content')

<style>
  /* .Polaris-Page {
    max-width: 95%;
      } */
.Polaris-Grid-Cell--cell_6ColumnLg {
  grid-column-end: span 4;
}
</style>

    <div class="Polaris-Tabs__Panel" id="all-customers-fitted-content-2" role="tabpanel" aria-labelledby="all-customers-fitted-2" tabindex="-1">
      <div class="Polaris-LegacyCard__Section">
        <div class="Polaris-LegacyCard__SectionHeader">
       
        </div>
    
      </div>
    </div>
    <div class="Polaris-Tabs__Panel Polaris-Tabs__Panel--hidden" id="accepts-marketing-fitted-Ccontent-2" role="tabpanel" aria-labelledby="accepts-marketing-fitted-2" tabindex="-1">
    </div>
  </div>
</div>
<div class="Polaris-Page">
  <div class="Polaris-Box" style="--pc-box-padding-block-end-xs:var(--p-space-4);--pc-box-padding-block-end-md:var(--p-space-5);--pc-box-padding-block-start-xs:var(--p-space-4);--pc-box-padding-block-start-md:var(--p-space-5);--pc-box-padding-inline-start-xs:var(--p-space-4);--pc-box-padding-inline-start-sm:var(--p-space-0);--pc-box-padding-inline-end-xs:var(--p-space-4);--pc-box-padding-inline-end-sm:var(--p-space-0);position:relative">
    <div class="Polaris-Page-Header--isSingleRow Polaris-Page-Header--noBreadcrumbs Polaris-Page-Header--mediumTitle">
      <div class="Polaris-Page-Header__Row">
        <div class="Polaris-Page-Header__TitleWrapper">
          <h1 class="Polaris-Header-Title">Sales by product</h1>
        </div>
      </div>
    </div>
  </div>
  <div class="">
    <div class="Polaris-LegacyCard">
      <div class="">
        <div class="Polaris-DataTable__Navigation">
          <button class="Polaris-Button Polaris-Button--disabled Polaris-Button--plain Polaris-Button--iconOnly" aria-label="Scroll table left one column" aria-disabled="true" type="button" tabindex="-1">
            <span class="Polaris-Button__Content">
              <span class="Polaris-Button__Icon">
                <span class="Polaris-Icon">
                  <span class="Polaris-Text--root Polaris-Text--visuallyHidden">
                  </span>
                  <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                    <path d="M12 16a.997.997 0 0 1-.707-.293l-5-5a.999.999 0 0 1 0-1.414l5-5a.999.999 0 1 1 1.414 1.414l-4.293 4.293 4.293 4.293a.999.999 0 0 1-.707 1.707z">
                    </path>
                  </svg>
                </span>
              </span>
            </span>
          </button>
          <button class="Polaris-Button Polaris-Button--plain Polaris-Button--iconOnly" aria-label="Scroll table right one column" type="button">
            <span class="Polaris-Button__Content">
              <span class="Polaris-Button__Icon">
                <span class="Polaris-Icon">
                  <span class="Polaris-Text--root Polaris-Text--visuallyHidden">
                  </span>
                  <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                    <path d="M8 16a.999.999 0 0 1-.707-1.707l4.293-4.293-4.293-4.293a.999.999 0 1 1 1.414-1.414l5 5a.999.999 0 0 1 0 1.414l-5 5a.997.997 0 0 1-.707.293z">
                    </path>
                  </svg>
                </span>
              </span>
            </span>
          </button>
        </div>
        <div class="Polaris-DataTable Polaris-DataTable__ShowTotals">
          <div class="Polaris-DataTable__ScrollContainer">
            <table class="Polaris-DataTable__Table">
              <thead>
                <tr>
                  <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header" scope="col">id</th>
                  <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col">Title</th>
                  <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col">Status</th>
                  <th data-polaris-header-cell="true" class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--header Polaris-DataTable__Cell--numeric" scope="col">created_at</th>
                </tr>
              </thead>
              <tbody>
              @foreach($products as $product)
                <tr class="Polaris-DataTable__TableRow Polaris-DataTable--hoverable">
                  <th class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--firstColumn" scope="row">{!!$product->id!!}</th>
                  <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">{!!$product->title!!}</td>
                  <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">{!!$product->status!!}</td>
                  <td class="Polaris-DataTable__Cell Polaris-DataTable__Cell--verticalAlignTop Polaris-DataTable__Cell--numeric">{!!$product->created_at!!}</td>
                </tr>
                @endforeach
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<main class="Polaris-Frame__Main" id="AppFrameMain" data-has-global-ribbon="false">
          <div class="Polaris-Frame__Content">
            <div class="Polaris-Page">
              <div class="Polaris-Page-Header Polaris-Page-Header--isSingleRow Polaris-Page-Header--noBreadcrumbs Polaris-Page-Header--mediumTitle">
                <div class="Polaris-Page-Header__Row">
                  <div class="Polaris-Page-Header__TitleWrapper">
                    <h1 class="Polaris-Header-Title">Welcome to Junip, Salal!</h1>
                    
                  </div>
                </div>
              </div>
              <!-- class="Polaris-Page Polaris-Page--fullWidth" -->
              <div >
                
                <!--card start -->
  <div class="Polaris-Page__Content">
    <div class="Polaris-Grid">
      <div class="Polaris-Grid-Cell Polaris-Grid-Cell--cell_6ColumnXs Polaris-Grid-Cell--cell_3ColumnSm Polaris-Grid-Cell--cell_3ColumnMd Polaris-Grid-Cell--cell_6ColumnLg Polaris-Grid-Cell--cell_6ColumnXl">
        <div class="Polaris-Card">
          <div class="Polaris-Card__Header">
            <h2 class="Polaris-Text--root Polaris-Text--headingMd Polaris-Text--semibold">LifeTime Revenue In This App</h2>
          </div>
          <div class="Polaris-Card__Section">
            <p>AU$100</p>
          </div>
        </div>
      </div>
      <div class="Polaris-Grid-Cell Polaris-Grid-Cell--cell_6ColumnXs Polaris-Grid-Cell--cell_3ColumnSm Polaris-Grid-Cell--cell_3ColumnMd Polaris-Grid-Cell--cell_6ColumnLg Polaris-Grid-Cell--cell_6ColumnXl">
        <div class="Polaris-Card">
          <div class="Polaris-Card__Header">
            <h2 class="Polaris-Text--root Polaris-Text--headingMd Polaris-Text--semibold">LifeTime Revenue In This App</h2>
          </div>
          <div class="Polaris-Card__Section">
            <p>AU$100</p>
          </div>
        </div>
      </div>
      <div class="Polaris-Grid-Cell Polaris-Grid-Cell--cell_6ColumnXs Polaris-Grid-Cell--cell_3ColumnSm Polaris-Grid-Cell--cell_3ColumnMd Polaris-Grid-Cell--cell_6ColumnLg Polaris-Grid-Cell--cell_6ColumnXl">
        <div class="Polaris-Card">
          <div class="Polaris-Card__Header">
            <h2 class="Polaris-Text--root Polaris-Text--headingMd Polaris-Text--semibold">30-Day In This App Revenue</h2>
          </div>
          <div class="Polaris-Card__Section">
          <p>AU$100</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- card end  -->
<!-- video div end  -->
<div class="Polaris-Card">
  <div class="Polaris-MediaCard">
    <div class="Polaris-MediaCard__MediaContainer">
      <div class="Polaris-VideoThumbnail__ThumbnailContainer">
        <div class="Polaris-VideoThumbnail__Thumbnail" style="background-image:url(https://burst.shopifycdn.com/photos/business-woman-smiling-in-office.jpg?width=1850)">
        </div>
        <button type="button" class="Polaris-VideoThumbnail__PlayButton" aria-label="Play video of length 1 minute and 20 seconds">
          <div class="Polaris-VideoThumbnail__Timestamp">
            <div class="Polaris-Stack Polaris-Stack--spacingExtraTight Polaris-Stack--alignmentCenter">
              <div class="Polaris-Stack__Item">
                <span class="Polaris-VideoThumbnail__PlayIcon">
                  <span class="Polaris-Icon">
                    <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--regular Polaris-Text--visuallyHidden">
                    </span>
                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                      <path d="M16 10a.997.997 0 0 1-.485.857l-10 6a1.004 1.004 0 0 1-1.008.013 1.001 1.001 0 0 1-.507-.87v-12a1.001 1.001 0 0 1 1.515-.857l10 6c.301.18.485.505.485.857z">
                      </path>
                    </svg>
                  </span>
                </span>
              </div>
              <div class="Polaris-Stack__Item">
                <p class="Polaris-Text--root Polaris-Text--bodyMd Polaris-Text--semibold">1:20</p>
              </div>
            </div>
          </div>
        </button>
      </div>
    </div>
    <div class="Polaris-MediaCard__InfoContainer">
      <div class="Polaris-Card__Section">
        <div class="Polaris-MediaCard__Popover">
          <div>
            <button class="Polaris-Button Polaris-Button--plain Polaris-Button--sizeSlim Polaris-Button--iconOnly" aria-label="Actions" type="button" tabindex="0" aria-controls="Polarispopover1" aria-owns="Polarispopover1" aria-expanded="false">
              <span class="Polaris-Button__Content">
                <span class="Polaris-Button__Icon">
                  <span class="Polaris-Icon">
                    <span class="Polaris-Text--root Polaris-Text--bodySm Polaris-Text--regular Polaris-Text--visuallyHidden">
                    </span>
                    <svg viewBox="0 0 20 20" class="Polaris-Icon__Svg" focusable="false" aria-hidden="true">
                      <path d="M6 10a2 2 0 1 1-4.001-.001 2 2 0 0 1 4.001.001zm6 0a2 2 0 1 1-4.001-.001 2 2 0 0 1 4.001.001zm6 0a2 2 0 1 1-4.001-.001 2 2 0 0 1 4.001.001z">
                      </path>
                    </svg>
                  </span>
                </span>
              </span>
            </button>
          </div>
        </div>
        <div class="Polaris-Stack Polaris-Stack--vertical Polaris-Stack--spacingTight">
          <div class="Polaris-Stack__Item">
            <div class="Polaris-MediaCard__Heading">
              <h2 class="Polaris-Text--root Polaris-Text--headingMd Polaris-Text--semibold">Turn your side-project into a business</h2>
            </div>
          </div>
          <div class="Polaris-Stack__Item">
            <p>In this course, you’ll learn how the Kular family turned their mom’s recipe book into a global business.</p>
          </div>
          <div class="Polaris-Stack__Item">
            <div class="Polaris-MediaCard__ActionContainer">
              <div class="Polaris-ButtonGroup">
                <div class="Polaris-ButtonGroup__Item">
                  <div class="Polaris-MediaCard__PrimaryAction">
                    <button class="Polaris-Button" type="button">
                      <span class="Polaris-Button__Content">
                        <span class="Polaris-Button__Text">Learn more</span>
                      </span>
                    </button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- video div start  -->
              <div class="">
   
              </div>
            </div>
          </div>
        </main>
@endsection