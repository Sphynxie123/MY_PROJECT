<section>
    <div class="text-center p-5">
        <img src="/images/W02.jpg" class="rounded" alt="Wedding" id="image">               
    </div>
</section>
<section>
<div class="mb-3">
    @foreach ($photos as $photo)
    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3">{{ $photo->description }}</textarea>
    @endforeach
    <!-- <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea> -->
</div>
</section>