const menuList = document.getElementById('menu');
const items =  [];
const menus = [];

fetch('menus.php') 
  .then(response => response.json())
  .then(data => {
    data.forEach(menu => {
      menus.push(menu)   
    });
    fetch('menuItems.php')  
    .then(response => response.json())
    .then(data => {
      data.forEach(menuItem => {
        items.push(menuItem)  
      });
  
      menus.forEach((menu)=>{
        
        const menuItems = items.filter((item)=>{
        
          return item.menuId == menu.menuId;
        })
        
        const menuElement = document.createElement("section");
        menuElement.setAttribute("class", "contenu-1");
        const menuTitleElement = document.createElement("h3");
        menuTitleElement.innerHTML = menu.name;
        menuElement.appendChild(menuTitleElement);

        menuElement.appendChild(document.createElement("hr"));

        const menuItemsListElement = document.createElement("ul");
        menuItems.forEach((item)=>{
          const menuItemElement = document.createElement("li");
          const menuItemTitle = document.createElement("span");
          menuItemTitle.setAttribute("class", "c2");
          menuItemTitle.innerHTML = item.name;
          menuItemElement.appendChild(menuItemTitle);
          menuItemElement.appendChild(document.createElement("br"))
          menuItemElement.append(item.description)
          menuItemsListElement.appendChild(menuItemElement)
        })

        menuElement.appendChild(menuItemsListElement)
        menuList.appendChild(menuElement);
      });

    })
    .catch(error => {
      console.error('Error fetching menu items data:', error);
    });
  })
  .catch(error => {
    console.error('Error fetching menu data:', error);
  });






