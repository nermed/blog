import React from 'react';

export default class LikeButton extends React.Component{
        state = {
            likes : this.props.likes || 0,
            isLiked: this.props.isLiked || false
        };
    handleClick(){
        const isLiked = this.state.isLiked;
        const likes = this.state.likes + (isLiked ? -1 : 1)
        this.setState({likes, isLiked : !isLiked});
    }
    render(){
        const {like, isLiked} = this.state
        return <button className="btn btn-link" onClick={()=> this.handleClick()} >
            {like} <i className={isLiked? "fas fa-thumbs-up" : "far fa-thumbs-up"} /> {isLiked? "Je n'aime plus": "J'aime"}
        </button>
    }
}