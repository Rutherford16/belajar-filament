<div class="grid grid-cols-6 gap-2">
    @php
        $produk = $this->table;
        // dd($produk);
    @endphp


@foreach ($produk as $item)
@dd($item)
        <span class="bg-text rounded p-4 hover:shadow-md" wire:key="{{ $item->id }}">
            <div class="text-center">{{ $item->nama }}</div>
            <img src="{{ $item->url_img }}" alt="gambar" class="my-1" />
            <div class="my-1 grid grid-cols-2 gap-1">
                <span>Rp. {{ $item->harga }},00</span>
                <span>Stok : {{ $item->stok }}</span>
            </div>
            <div class="text-left">Deskripsi : Lorem, ipsum dolor sit amet consectetur adipisicing elit. Nam obcaecati
                optio eveniet ad, quod modi sed rerum numquam necessitatibus vero aliquid tempore, ipsum facere
                suscipit, est placeat voluptatum temporibus recusandae.</div>
        </span>
    @endforeach
</div>
