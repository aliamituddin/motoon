import React from 'react'
import axios from 'axios'

class Hadith extends React.Component {
  constructor (props) {
    super(props)
    this.state = {text : '',
                  chapter: ''            }
   this.updatehadithid = this.updatehadithid.bind(this)
  }
  componentDidMount() {
    axios.get(`hadith/${this.props.id}`)
    .then(res => {
      this.setState({ text : res.data.text,
                      chapter:res.data.chapter.title

      });
    });
  }

 updatehadithid () {
   var id = Math.floor(Math.random() * (7000 - 1) + 1);
  axios.get(`hadith/${id}`)
  .then(res => {
    this.setState({ text : res.data.text,
chapter:res.data.chapter.title
    });
  });

}
  render () {
    return (
      <div
      className = 'Hadith'
      onClick = {this.updatehadithid}
      >
      {this.state.text}
      <span> {this.state.chapter} </span>
      </div>
    )
  }
}

export default Hadith ;
