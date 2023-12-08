@extends('admin.layout.master')
@section('content')
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">

<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">

                <form action="{{ route('courier.update',$courier->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">имя</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="example-text-input" name="name" value="{{$courier->name}}">
                        </div>
                    </div>
                    @if ($errors->has('name'))
                        <span class="text-danger">{{ $errors->first('name') }}</span>
                    @endif

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">имя пользователя</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="example-text-input" name="username" value="{{$courier->username}}">
                        </div>
                    </div>
                    @if ($errors->has('username'))
                        <span class="text-danger">{{ $errors->first('username') }}</span>
                    @endif

                    <div class="row mb-3">
                        <label for="example-email-input" class="col-sm-2 col-form-label">Почта</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="email" placeholder="examle@example.com" id="example-email-input" name="email" value="{{$courier->email}}">
                        </div>
                    </div>
                    @if ($errors->has('email'))
                        <span class="text-danger">{{ $errors->first('email') }}</span>
                    @endif

                    <div class="row mb-3">
                        <label for="example-password-input" class="col-sm-2 col-form-label">Пароль</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="password" id="example-password-input" name="password">
                        </div>
                    </div>
                    @if ($errors->has('password'))
                        <span class="text-danger">{{ $errors->first('password') }}</span>
                    @endif

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">адрес</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="example-text-input" name="address" value="{{$courier->address}}">
                        </div>
                    </div>
                    @if ($errors->has('address'))
                        <span class="text-danger">{{ $errors->first('address') }}</span>
                    @endif

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">город</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="example-text-input" name="city" value="{{$courier->city}}">
                        </div>
                    </div>
                    @if ($errors->has('city'))
                        <span class="text-danger">{{ $errors->first('city') }}</span>
                    @endif

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">состояние</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="example-text-input" name="state" value="{{$courier->state}}">
                        </div>
                    </div>
                    @if ($errors->has('state'))
                        <span class="text-danger">{{ $errors->first('state') }}</span>
                    @endif

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">номер телефона</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="example-text-input" name="phone_number" value="{{$courier->phone_number}}">
                        </div>
                    </div>
                    @if ($errors->has('phone_number'))
                        <span class="text-danger">{{ $errors->first('phone_number') }}</span>
                    @endif

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">зарплата</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="example-text-input" name="salary" value="{{$courier->salary}}">
                        </div>
                    </div>
                    @if ($errors->has('salary'))
                        <span class="text-danger">{{ $errors->first('salary') }}</span>
                    @endif




                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label">статус</label>
                        <div class="col-sm-10">
                            <select class="form-select" aria-label="Default select example" name="status">
                                <option value="0" @if($courier->status == "fresh") selected="" @endif>fresh</option>
                                <option value="1" @if($courier->status == "active") selected="" @endif>active</option>
                                <option value="2" @if($courier->status == "problems") selected="" @endif>problems</option>

                                </select>
                        </div>
                    </div>
                    @if ($errors->has('status'))
                        <span class="text-danger">{{ $errors->first('status') }}</span>
                    @endif

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">пользователи</label>
                        <div class="col-sm-10">
                        <select class="select1" name="field1" id="field1" multiple multiselect-search="true" multiselect-select-all="true"  multiselect-max-items="3" onchange="console.log(this.selectedOptions)">
                            
                        
                            @foreach($users as $user)
                                <option value="{{$user->id}}" @if(is_array($courier->used) && in_array($user->id, $courier->used)) selected @endif>{{$user->name}}</option>
                            @endforeach
                            
                            </select>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label for="example-text-input" class="col-sm-2 col-form-label">способ оплаты</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="text" id="example-text-input" name="payment_method" value="{{$courier->payment_method}}">
                        </div>
                    </div>
                    @if ($errors->has('payment_method'))
                        <span class="text-danger">{{ $errors->first('payment_method') }}</span>
                    @endif

                    <div class="row mb-3">
                        <label for="example-date-input" class="col-sm-2 col-form-label">дата платежа</label>
                        <div class="col-sm-10">
                            <input class="form-control" type="date" value="{{$courier->pay_date}}" id="example-date-input" name="pay_date">
                        </div>
                    </div>
                    @if ($errors->has('pay_date'))
                        <span class="text-danger">{{ $errors->first('pay_date') }}</span>
                    @endif


                    <input type="hidden" name="used" id="used" value="{{ implode(',', $courier->used) }}">


                    


                    <button type="submit" class="btn btn-success waves-effect waves-light">Обновлять</button>

                </form>

            </div>
        </div>
    </div> <!-- end col -->
</div>
<!-- end row -->
@endsection
@section('customjs')

<script>
    var style = document.createElement('style');
        style.setAttribute("id","multiselect_dropdown_styles");
        style.innerHTML = `
        .multiselect-dropdown{
        display: inline-block;
        padding: 2px 5px 0px 5px;
        border-radius: 4px;
        border: solid 1px #ced4da;
        background-color: white;
        position: relative;
        background-image: url("data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%23343a40' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e");
        background-repeat: no-repeat;
        background-position: right .75rem center;
        background-size: 16px 12px;
        }
        .multiselect-dropdown span.optext, .multiselect-dropdown span.placeholder{
        margin-right:0.5em; 
        margin-bottom:2px;
        padding:1px 0; 
        border-radius: 4px; 
        display:inline-block;
        }
        .multiselect-dropdown span.optext{
        background-color:lightgray;
        padding:1px 0.75em; 
        }
        .multiselect-dropdown span.optext .optdel {
        display:none;
        float: right;
        margin: 0 -6px 1px 5px;
        font-size: 0.7em;
        margin-top: 2px;
        cursor: pointer;
        color: #666;
        }
        .multiselect-dropdown span.optext .optdel:hover { color: #c66;}
        .multiselect-dropdown span.placeholder{
        color:#ced4da;
        }
        .multiselect-dropdown-list-wrapper{
        box-shadow: gray 0 3px 8px;
        z-index: 100;
        padding:2px;
        border-radius: 4px;
        border: solid 1px #ced4da;
        display: none;
        margin: -1px;
        position: absolute;
        top:0;
        left: 0;
        right: 0;
        background: white;
        }
        .multiselect-dropdown-list-wrapper .multiselect-dropdown-search{
        margin-bottom:5px;
        }
        .multiselect-dropdown-list{
        padding:2px;
        height: 15rem;
        overflow-y:auto;
        overflow-x: hidden;
        }
        .multiselect-dropdown-list::-webkit-scrollbar {
        width: 6px;
        }
        .multiselect-dropdown-list::-webkit-scrollbar-thumb {
        background-color: #bec4ca;
        border-radius:3px;
        }

        .multiselect-dropdown-list div{
        padding: 5px;
        }
        .multiselect-dropdown-list input{
        height: 1.15em;
        width: 1.15em;
        margin-right: 0.35em;  
        }
        .multiselect-dropdown-list div.checked{
        }
        .multiselect-dropdown-list div:hover{
        background-color: #ced4da;
        }
        .multiselect-dropdown span.maxselected {width:100%;}
        .multiselect-dropdown-all-selector {border-bottom:solid 1px #999;}
    `;
        document.head.appendChild(style);

        function MultiselectDropdown(options){
            var config={
                search:true,
                height:'15rem',
                placeholder:'select',
                txtSelected:'selected',
                txtAll:'All',
                txtRemove: 'Remove',
                txtSearch:'search',
                ...options
            };
            function newEl(tag,attrs){
                var e=document.createElement(tag);
                if(attrs!==undefined) Object.keys(attrs).forEach(k=>{
                if(k==='class') { Array.isArray(attrs[k]) ? attrs[k].forEach(o=>o!==''?e.classList.add(o):0) : (attrs[k]!==''?e.classList.add(attrs[k]):0)}
                else if(k==='style'){  
                    Object.keys(attrs[k]).forEach(ks=>{
                    e.style[ks]=attrs[k][ks];
                    });
                }
                else if(k==='text'){attrs[k]===''?e.innerHTML='&nbsp;':e.innerText=attrs[k]}
                else e[k]=attrs[k];
                });
                return e;
            }

            
            document.querySelectorAll(".select1").forEach((el,k)=>{
                
                var div=newEl('div',{class:'multiselect-dropdown',style:{width:'100%',padding:config.style?.padding??''}});
                el.style.display='none';
                el.parentNode.insertBefore(div,el.nextSibling);
                var listWrap=newEl('div',{class:'multiselect-dropdown-list-wrapper'});
                var list=newEl('div',{class:'multiselect-dropdown-list',style:{height:config.height}});
                var search=newEl('input',{class:['multiselect-dropdown-search'].concat([config.searchInput?.class??'form-control']),style:{width:'100%',display:el.attributes['multiselect-search']?.value==='true'?'block':'none'},placeholder:config.txtSearch});
                listWrap.appendChild(search);
                div.appendChild(listWrap);
                listWrap.appendChild(list);

                el.loadOptions=()=>{
                list.innerHTML='';
                
                if(el.attributes['multiselect-select-all']?.value=='true'){
                    var op=newEl('div',{class:'multiselect-dropdown-all-selector'})
                    var ic=newEl('input',{type:'checkbox'});
                    op.appendChild(ic);
                    op.appendChild(newEl('label',{text:config.txtAll}));
            
                    op.addEventListener('click',()=>{
                    op.classList.toggle('checked');
                    op.querySelector("input").checked=!op.querySelector("input").checked;
                    
                    var ch=op.querySelector("input").checked;
                    list.querySelectorAll(":scope > div:not(.multiselect-dropdown-all-selector)")
                        .forEach(i=>{if(i.style.display!=='none'){i.querySelector("input").checked=ch; i.optEl.selected=ch}});
            
                    el.dispatchEvent(new Event('change'));
                    });
                    ic.addEventListener('click',(ev)=>{
                    ic.checked=!ic.checked;
                    });
                    el.addEventListener('change', (ev)=>{
                    let itms=Array.from(list.querySelectorAll(":scope > div:not(.multiselect-dropdown-all-selector)")).filter(e=>e.style.display!=='none')
                    let existsNotSelected=itms.find(i=>!i.querySelector("input").checked);
                    if(ic.checked && existsNotSelected) ic.checked=false;
                    else if(ic.checked==false && existsNotSelected===undefined) ic.checked=true;
                    });
            
                    list.appendChild(op);
                }

                Array.from(el.options).map(o=>{
                    var op=newEl('div',{class:o.selected?'checked':'',optEl:o})
                    var ic=newEl('input',{type:'checkbox',checked:o.selected});
                    op.appendChild(ic);
                    op.appendChild(newEl('label',{text:o.text}));

                    op.addEventListener('click',()=>{
                    op.classList.toggle('checked');
                    op.querySelector("input").checked=!op.querySelector("input").checked;
                    op.optEl.selected=!!!op.optEl.selected;
                    el.dispatchEvent(new Event('change'));
                    });
                    ic.addEventListener('click',(ev)=>{
                    ic.checked=!ic.checked;
                    });
                    o.listitemEl=op;
                    list.appendChild(op);
                });
                div.listEl=listWrap;

                div.refresh=()=>{
                    div.querySelectorAll('span.optext, span.placeholder').forEach(t=>div.removeChild(t));
                    var sels=Array.from(el.selectedOptions);
                    // if(sels.length>(el.attributes['multiselect-max-items']?.value??9)){
                    //   div.appendChild(newEl('span',{class:['optext','maxselected'],text:sels.length+' '+config.txtSelected}));   
                    // console.log("hi");       
                    // }
                    // else{
                    sels.map(x=>{
                        var c=newEl('span',{class:'optext',text:x.text, srcOption: x});
                        if((el.attributes['multiselect-hide-x']?.value !== 'true'))
                        c.appendChild(newEl('span',{class:'optdel',text:'x',title:config.txtRemove, onclick:(ev)=>{c.srcOption.listitemEl.dispatchEvent(new Event('click'));div.refresh();ev.stopPropagation();}}));

                        div.appendChild(c);
                    });
                    // }
                    if(0==el.selectedOptions.length) div.appendChild(newEl('span',{class:'placeholder',text:el.attributes['placeholder']?.value??config.placeholder}));
                };
                div.refresh();
                }
                el.loadOptions();
                
                search.addEventListener('input',()=>{
                list.querySelectorAll(":scope div:not(.multiselect-dropdown-all-selector)").forEach(d=>{
                    var txt=d.querySelector("label").innerText.toUpperCase();
                    d.style.display=txt.includes(search.value.toUpperCase())?'block':'none';
                });
                });

                var data_set1 = document.getElementById("used");

                // Set its value property
                // input.value = "New value";

                // console.log(sels.length);
                
                div.addEventListener('click',()=>{
                    // console.log(el.selectedOptions);
                    var sels=Array.from(el.selectedOptions);
                    var myArray = [];
                    for (let i = 0; i < el.selectedOptions.length; i++) {
                            myArray.push(el.selectedOptions[i].value);
                        }
                    data_set1.value = myArray;
                    console.log(myArray);
                    
                    if (sels.length == 5) {
                        div.listEl.style.display='none';
                        div.refresh();
                    }else{
                        div.listEl.style.display='block';
                        search.focus();
                        search.select();
                    }
                });
                
                document.addEventListener('click', function(event) {
                    if (!div.contains(event.target)) {
                        listWrap.style.display='none';
                        div.refresh();
                    }
                });    
            });


        }

        window.addEventListener('load',()=>{
        MultiselectDropdown(window.MultiselectDropdownOptions);
        });
</script>

<!-- JAVASCRIPT -->
@stop