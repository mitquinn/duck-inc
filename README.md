#Day 1#

Estimated Completion Time: 10-20 minutes.

Welcome to **Duck Inc**.

You have accepted this position at the amazing **Duck Inc**. We have this amazing new cloning technology that will transform your code into real ducks. Surprisingly it runs on PHP!

Luckily ducks are surprisingly easy to create because the cloning machine is so advanced. 

So for your first project we need you to build a Mallard.

**All you need to do is:**

 1. Create a Mallard class (we handled the creation of the file for you.)
 2. The Mallard class will need to be able to fly, quack, swim. When you add these methods the cloning machine will give the duck these abilities.
 3. Each method should just return its name in the form of a string. (Example: quack()->"quack" ).
 4. The sales team has already let us know that more species of duck are going to be needed in the future. So keep that in mind.
 5. The **Duck Inc** QA team handled the phpunit test for you. These will validate the ducks you are creating. If you want to test your work feel free to run _phpunit_ root directory

We included a little markup to get you started today. We need you to complete work by Tuesday. Your pull request should be submitted in the format of "Your Name - Day 1"

If you have any questions feel free to reach out to Mitch or Kelvin.

Good Luck on your first day

#Day 2#

**Remember to get your pull request in for Day 1!**

So great news sales has finally closed the deal with the _Duck Feather Pillow Company_ and they have put in a huge order for **Canvasback** ducks.

So your task for today is implement a **Canvasback** class.

Of course the canvasback will need to be able to quack, fly and swim. It turns out though that the canvasback is a slow swimmer so make sure the output for the swimming method is 'swim slowly'.

Oh the team working on the cloning machine have asked that the ducks have a clone method with some of their technical code be added to the ducks as well. I put the code below:

```php
public function replicate()
{
  return get_class($this);
}
```

This will need to be added to all ducks in order for them to clone.

Please submit your Pull Request by Wednesday and the title should be "{{Your Name}} - Day 2" 