<<<<<<< HEAD
##Genesis

Controller - reusable functions

Libs(Library)
- foundation : foundation related files
- user : user customize files

Public
- images
- css
=======
#Genesis

---

##Less Function

####pxtoem
Convert "px" to "em", *require "base.less"

Usage

	#pxtoem > .font-size( 12, @base-em );
	
---

##Responsive Slides

namespace variable:

1. centered-btns
2. large-btns
3. transparent-btns

Usage

	$(window).load(function() {
		$('#slider2').responsiveSlides({
			auto: true,
			pager: true,
			nav: true,
			speed: 500,
			maxwidth: 1000,
			namespace: 'transparent-btns'
		});
	});
	
---

PHP Active Record

```
$user = User::create(array('name' => 'Tito', 'state' => 'VA'));
$user = User::find_by_name('Tito');
$user->name = 'Tito Jr';
$user->save();
$user->delete();
```
>>>>>>> -
