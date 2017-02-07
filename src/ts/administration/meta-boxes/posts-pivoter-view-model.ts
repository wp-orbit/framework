interface PostsPivoterViewModelArgs
{
    pivotablePosts: any;
}

class PostsPivoterViewModel
{
    posts = ko.observableArray([]);

    constructor(args: PostsPivoterViewModelArgs)
    {
        this.posts( args.pivotablePosts )
    }
}