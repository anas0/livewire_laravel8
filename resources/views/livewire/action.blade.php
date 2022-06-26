<div>
    <button type="button" wire:click="addTwoNumbers(10,25)">Sum</button><br>

    <textarea wire:keydown.enter="displayMessage($event.target.value)"></textarea><br> 

    <form action="" wire:submit.prevent="getSum">
        Number 1: <input type="text" name="num1" wire:model="num1"><br>
        Number 2: <input type="text" name="num2" wire:model="num2"><br>
        <button type="submit">Submit</button>
    </form>

    Sum: {{$sum}}
    <br>
    <br>
    Message: {{$message}}

</div>
