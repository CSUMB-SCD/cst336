<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
    var data = {
  posts: [
    {
      text: 'working hard!',
      timestamp: 1519673597135,
      photo: './images/turtle-sandwich.png',
      username: 'profjason',
      likes: 43,
      spam: false,
      comments: [
        {
          text: "funny looking turtle",
          username: 'tommy',
          timestamp: 1519804800000,
        },
        {
          text: "@profjason looks like you",
          username: 'sarahlives',
          timestamp: 1519856607000,
        }
      ]
    },
    {
      text: 'where i will be #wheniretire',
      timestamp: 1518681617827,
      photo: './images/resort.jpg',
      username: 'tommy',
      likes: 186,
      spam: false,
      comments: [
        {
          text: "@tommy you will NEVER retire! too many spenders in your camp!",
          username: 'tommy',
          timestamp: 1518819807000,
        },
        {
          text: "i will be your neighbor",
          username: 'dropandroll',
          timestamp: 1518835500000,
        },
        {
          text: "already own that house and don't take company",
          username: 'profjason',
          timestamp: 1518977160000,
        }
      ]
    },
    {
      text: 'did he live',
      timestamp: 1519027278654,
      photo: './images/shark-wave.jpg',
      username: 'sarahlives',
      likes: 22,
      spam: false,
      comments: [
        {
          text: "yep",
          username: 'profjason',
          timestamp: 1518977160000,
        }
      ]
    },
    {
      text: 'wow...who knows that is out there. i wanted to be an astronaut, but decided to work fast food instead because i like to help people.',
      timestamp: 1513929600000,
      photo: './images/space.jpg',
      username: 'nocluebill',
      likes: 1,
      spam: false,
    },
    {
      text: 'smash it like a bug!',
      timestamp: 1462258800000,
      photo: './images/parrot-smash.jpg',
      username: 'dropandroll',
      likes: 22,
      spam: false,
      comments: [
        {
          text: "this is how my dad taught me to do it too!",
          username: 'tommy',
          timestamp: 1498703760000,
        },
        {
          text: "not happening",
          username: 'nocluebill',
          timestamp: 1498839900000,
        },
        {
          text: "way too hard",
          username: 'nocluebill',
          timestamp: 1498875900000,
        },
        {
          text: "birds can do anything",
          username: 'sarahlives',
          timestamp: 1499307900000,
        },
        {
          text: "you should really take this picture down. it is not fair to the bird to put it on a skateboard",
          username: 'profjason',
          timestamp: 1505653800000,
        }
      ]
    }
  ]
}
</script>
<html>
    <head>
        <title>
            Insta-fake
        </title>
        
        <link href="./css/styles.css" rel="stylesheet" type="text/css"/>
    </head>
    
    
    <body>
        
        <div id="posts_section" style="padding:30px;">
            
            
        </div>
        
        
        
        
        <script>
            function printPost(post,num) {
                $(document).ready(function() {
                    
                  var nodes = new Array();
                  var div = document.createElement('div')
                  div.setAttribute("id","post"+num)
                  
                  //div elements
                  
                  var user = document.createElement('h2')
                  user.innerHTML = post['username']
                  nodes.push(user)
                  
                  var image = document.createElement('img')
                  image.setAttribute("src",post['photo'])
                  image.style.width = '500px'
                  image.style.height = '500px'
                  nodes.push(image)
                  
                  var post_text = document.createElement('p')
                  post_text.innerHTML = post['text']
                  nodes.push(post_text)
                  
                  var likes_div = document.createElement('div')
                  
                  var likes_icon = document.createElement('img')
                  likes_icon.setAttribute("src","./images/heartIcon.png")
                  likes_icon.style.width = '10px'
                  likes_icon.style.height = '10px'
                  likes_icon.style.display='inline'
                  likes_icon.style.marginRight = '5px'
                  likes_div.appendChild(likes_icon)
                  
                  var likes = document.createElement('h3')
                  likes.innerHTML = post['likes'] + ' likes'
                  likes.style.display = 'inline'
                  likes.style.color = '#327FFF'
                  likes_div.appendChild(likes)
                  

                  nodes.push(likes_div)
                  
                  var comments_div = document.createElement('div')
                  comments_div.setAttribute("id","comments_div")
                  
                  var comments_icon = document.createElement('img')
                  comments_icon.setAttribute("src","./images/commentIcon.png")
                  comments_icon.style.width = '10px'
                  comments_icon.style.height = '10px'
                  comments_icon.style.display = 'inline'
                  comments_div.appendChild(comments_icon)
                  
                  
                  var comments = new Array();
                  
                  for(var i = 0; i < post['comments'].length; i++)
                  {
                    var comment_div = document.createElement('div')
                    comment_div.style.display = 'block'
                    comment_div.style.marginLeft = '10px'
                    var username = document.createElement('h3')
                    username.style.marginRight = '5px'
                    username.style.color = '#327FFF'
                    username.innerHTML = post['comments'][i]['username']
                    username.style.display = 'inline'
                    comment_div.appendChild(username)
                     
                    var user_comment = document.createElement('h3')
                    user_comment.innerHTML = post['comments'][i]['text']
                    user_comment.style.display = 'inline'
                    comment_div.appendChild(user_comment)
                    comments.push(comment_div)
                  }
                  
                  comments[0].style.display = 'inline'
                  comments_div.appendChild(comments[0])
                  
                  if(comments.length > 1)
                  {
                    var viewComments = document.createElement('p')
                    viewComments.setAttribute("id","viewComments")
                    viewComments.innerHTML = 'view all ' + comments.length + ' comments'
                    viewComments.style.color = 'grey'
                    viewComments.style.cursor = 'pointer'
                    comments_div.appendChild(viewComments)
                    
                    var hiddenCommentsDiv = document.createElement('div')
                    hiddenCommentsDiv.setAttribute("id","hiddenComments")
                    hiddenCommentsDiv.style.visibility = 'hidden'
                    for(var i = 1; i < comments.length; i++)
                    {
                      hiddenCommentsDiv.appendChild(comments[i])
                    }
                    
                
                    comments_div.appendChild(hiddenCommentsDiv)
                    
                    viewComments.addEventListener("click",function(){
                      
                      if(hiddenCommentsDiv.style.visibility == "hidden")
                      {
                        hiddenCommentsDiv.style.visibility = "visible"
                      }
                      else if(hiddenCommentsDiv.style.visibility == "visible")
                      {
                        hiddenCommentsDiv.style.visibility = "hidden"
                      }
                      
                    })
                    
                    
                    var spam_button = document.createElement('button')
                    spam_button.innerHTML = "Report spam"
                    spam_button.addEventListener("click",function(){
                      post['spam'] = true
                      
                    })
                    
                  }
                  
                  
                  nodes.push(comments_div)
                  nodes.push(spam_button)
                  
                  for(var i = 0; i < nodes.length; i++)
                  {
                    div.appendChild(nodes[i])
                    nodes[i].style.marginLeft = '40%'
                    nodes[i].style.paddingBottom = '10px'
                  }
                  document.getElementById('posts_section').appendChild(div)
                  
                    
                    
                })
            }
            
            
            for(var i = 0; i < data.posts.length; i++)
            {
              if(data.posts[i]['spam'] == false)
              {
                printPost(data.posts[i],i)
              }
            }
            
          
            
        </script>
        
    </body>
</html>


