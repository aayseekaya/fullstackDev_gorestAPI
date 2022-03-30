import React, {useEffect, useState, useGlobal} from "reactn";
import ReactDOM from 'react-dom';
import "antd/dist/antd.css";
import { List, Avatar, Space } from 'antd';

function HelloReact(props) {
  //  let [data, setData] = useState([]);

    let {data, setData} = props;
    
const IconText = ({ icon, text }) => (
    <Space>
      {React.createElement(icon)}
      {text}
    </Space>
  );
console.log(this.props.data)

    //   let get = async () => {
    //     let restData = await axios.get(`/data`).then(({data}) => {
    //     //console.log(data)
    //         if (data) {
    //             return data
    //         }
    //     });
    //     console.log({restData})
    //     setData(restData);
    // }

    // useEffect(() => {
    //         get();
            
    // console.log(data)
    // }, [])
    return (
        <div style={{
            display: 'block',  padding: 30
          }}>
            <h4>ReactJS Ant-Design List Component</h4>
            {/* <List
                itemLayout="horizontal"
                dataSource={data}
                renderItem={item => (
                <List.Item>
                    <List.Item.Meta
                    avatar={<Avatar src="https://joeschmoe.io/api/v1/random" />}
                    title={<a href="https://ant.design">{item["name"]}</a>}
                    description="Ant Design, a design language for background applications, is refined by Ant UED Team"
                    />
                </List.Item>
                )}
            /> */}
          </div>
    );
}

if (document.getElementById('hello-react')) {
    ReactDOM.render(<HelloReact />, document.getElementById('hello-react'));
}