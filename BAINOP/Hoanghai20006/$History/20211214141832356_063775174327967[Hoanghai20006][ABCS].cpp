#include<bits/stdc++.h>

using namespace std;

/*void sapxep(long long a[], n){
    for(int i = 0; i<n; i++)
        for(int j = i+1; j<n; i++)
            if()
}*/
int main(){
    long long a[7], temp;
    vector<long long> b;
    for(int i = 0; i<7; i++)
        cin >> a[i];
    sort(a, a+7);
    b.push_back(a[0]);
    b.push_back(a[1]);
    temp = a[6] - (a[0]+a[1]);
    b.push_back(temp);
    for(int i = 0; i<3; i++)
        cout <<b[i]<<" ";
}
