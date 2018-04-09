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
    },
    {
      text: 'smash it like a bug!',
      timestamp: 1462258800000,
      photo: './images/parrot-smash.jpg',
      username: 'dropandroll',
      likes: 22,
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
            function printPost(post) {
                $(document).ready(function() {
                    var html = "<div" + " style=" + "margin:0 auto;" + ">" + "<img src=" + "./images/profilePicture.png" + " width=50 height=50/>" + "<img src=" + "'" + post.photo + "'" + " width=300 height=300/>" + 
                    "<h2>" + post.text + "</h2>" + "</div>"
                    $("#posts_section").append(html)
                    
                    
                    
                })
            }
            
            
            for(var i = 0; i < data.posts.length; i++)
            {
                printPost(data.posts[i])
            }
            
        </script>
        
    </body>
</html>


