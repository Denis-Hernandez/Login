function footer_onClick(value){
  let icon = document.querySelector('.footer__material-icon');
  if(value.checked){
    icon.textContent = 'expand_more';
  }else{
    icon.textContent = 'expand_less';
  }
}

async function requestData(space_object ){
  const data = await fetch('http://localhost:3000/api/v1/planets/'+space_object.id)
  .then(response => response.json());

  let central_panel = document.getElementsByClassName("solar-system__central-panel__text")[0];
  central_panel.innerHTML = "";
  let content="";
  console.log(Object.keys(data));
  Object.keys(data).forEach((key)=>{
    content += key + '<dd>' +data[key] + "</dd>";
  });
  central_panel.innerHTML = content;
}
