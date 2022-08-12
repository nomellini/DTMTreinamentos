    <form action={{ route('site.contato') }} method="post">
        @csrf
        <div class="form-group">
            <label for="exampleInputEmail1">Nome</label>
            <input type="text" class="form-control" name="nome" placeholder="Nome" >
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Senha</label>
            <input type="text" class="form-control" name='Senha' placeholder="Password" >
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
    </form>
{{ $slot }}
{{ $cor }}
