@extends('shopify-app::layouts.default')

@section('content')
  <h3 class="display-3">
    <div class="row">
      <div class="col-md-6">
        
        
      </div>
      <div class="col-md-6 text-right">
      <button class="Polaris-Button" type="button">
  <span class="Polaris-Button__Content">
    <span class="Polaris-Button__Text addProduct">Add product</span>
  </span>
</button>
      </div>
    </div>
  </h3>
  <div class="row">
    <div class="col-md-12">
 
      <div class="card">
          <ul class="resource-list">
            <img src="{{ asset('assets/images/retail.svg') }}" />           
          </ul>
        </div>
    </div>
    
  </div>
@endsection
@section('scripts')
  <script>
    $( document ).ready(function() {
      let selectedValues = []
      const ResourcePicker = AppBridge.actions.ResourcePicker;
      const picker = ResourcePicker.create(app, {
        resourceType: ResourcePicker.ResourceType.Product,
        options: {
          showVariants: false,
          initialSelectionIds: selectedValues,
        }
      });
      picker.subscribe(ResourcePicker.Action.SELECT, (payload) => {
        console.log(payload.selection)
        selectedValues = payload.selection.map(i => { 
          return { 
            id : i.id,
            originalSrc: i.images.length ? i.images[0].originalSrc : '',
            title: i.title, 
            createdAt: i.createdAt
          } 
        })
        $('.resource-list').html(createProductList())
        barCheck()
      });
      const contextualSaveBar = actions.ContextualSaveBar.create(app, {
        saveAction: {
          disabled: false,
          loading: false,
        },
        discardAction: {
          disabled: false,
          loading: false
        }
      });
      
      $('.addProduct').click(function(){
        if(selectedValues.length){
          picker.set({initialSelectionIds: selectedValues });
        }
        picker.dispatch(ResourcePicker.Action.OPEN);
      })
      function createProductList(){
        let html = ``;
        if(selectedValues.length){
          for( let i=0; i<selectedValues.length; i++ ){
            html += `
              <li class="resource-list__item">
                <div class="resource-list__item-owned">
                  <span class="avatar avatar--medium" aria-label="Derek" role="img">
                  <img src="${selectedValues[i].originalSrc}" class="Polaris-Avatar__Image" alt="Avatar image for Derek" role="presentation"></span>
                </div>
                <div class="resource-list__item-content">
                  <h3>${selectedValues[i].title}</h3>
                  <p>${selectedValues[i].createdAt}</p>
                </div>
              </li>
            `;
          }
        }else{
          html +=`<img src="{{ asset('assets/images/retail.svg') }}" />`;
        }
        return html;
      }
      $('.videoFile').change(function(){
        barCheck();
      })
      $('.imageFile').change(function(){
        barCheck();
      })
      $('.roomName').keydown(function(){
        barCheck();
      })
      function barCheck(){
        if(selectedValues.length && $('.videoFile').val() && $('.imageFile').val() && $(".roomName").val()){
          contextualSaveBar.dispatch(actions.ContextualSaveBar.Action.SHOW);
        }else{
          contextualSaveBar.dispatch(actions.ContextualSaveBar.Action.HIDE);
        }
      }
      function toFormData(data){
        var form_data = new FormData();
        for ( var key in data ) {
          if(typeof data[key] === 'object'){
            if(data[key].length){
              for (var i = 0; i < data[key].length; i++) {
                form_data.append(`${key}[]`, data[key][i]);
              }
            }else{
              form_data.append(key, data[key]);
            }
          }else{
            form_data.append(key, data[key]);
          }
        }
        return form_data
      }
    });
    
  </script>
@endsection
